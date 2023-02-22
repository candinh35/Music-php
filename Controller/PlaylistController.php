<?php
session_start();
$dir = str_replace('Controller\admin', '', __DIR__);
require_once $dir . "Model/playlist.php";
require_once $dir . "Helper/Helper.php";
require_once $dir . "App/core/View.php";

class PlaylistController
{
    private $playlist;

    public function __construct()
    {
        $this->playlist = new Playlist();
    }

    public function index()
    {
        $playlists = $this->playlist->getAll();
        View::redirect('admin/playlist/indexPlaylist', compact('playlists'));
    }

    public function show($id)
    {
        $playlist = $this->playlist->getById($id);
        View::redirect('playlist/show');
    }

    public function create()
    {
        View::redirect('admin/playlist/createPlaylist');
    }

    public function store()
    {
        // kiểm tra validate dữ liệu
        if (!Helper::validateplaylist($_POST)) {
            return Helper::back();
        }

        $playlist = [
            'name' => Helper::validateInput($_POST['name']),
            'description' => Helper::validateInput($_POST['description']),
        ];
        $playlist['avata_url'] = Helper::upload($_FILES['image']['name'], $_FILES['image']['tmp_name']);
        $this->playlist->create($playlist);

        $_SESSION['success'] = "You are create success";
        header('location:?controller=playlist&action=index&admin=1');

    }

    public function edit()
    {
        if (empty($_GET['id']) && !is_numeric($_GET['id'])) {
            Helper::back();
        }
        $playlist = $this->playlist->getById($_GET['id']);
        View::redirect('admin/playlist/editPlaylist', compact('playlist'));
    }

    public function update()
    {
        if (empty($_GET['id']) && !is_numeric($_GET['id'])) {
            Helper::back();
        }
        if (!Helper::validateplaylist($_POST)) {
            return Helper::back();
        }


        $playlist = [
            'name' => Helper::validateInput($_POST['name']),
            'description' => Helper::validateInput($_POST['description']),
        ];
        // pass validate thì sẽ upload table playlist
        $this->playlist->update($_GET['id'], $playlist);

        $_SESSION['success'] = "You are update success";
        header('location:?controller=playlist&action=index&admin=1');

    }

    public function delete()
    {
        if (empty($_GET['id']) && !is_numeric($_GET['id'])) {
            return Helper::back();
        }
        $playlist = $this->playlist->getById($_GET['id']);
        if (!$playlist) {
            return Helper::back();
        }

        unlink('uploads/' . $playlist['avata_url']);

        $this->playlist->delete($_GET['id']);

        $_SESSION['success'] = "You are delete success";
        header('location:?controller=playlist&action=index&admin=1');
    }

}
