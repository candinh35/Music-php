<?php
session_start();
$dir = str_replace('Controller\admin', '', __DIR__);
require_once $dir . "Model/Album.php";
require_once $dir . "Helper/Helper.php";
require_once $dir . "App/core/View.php";
require_once $dir . "Controller/Controller.php";
require_once $dir . "Validation/Validate.php";

class AlbumController extends Controller
{
    private $album;

    public function __construct()
    {
        $this->album = new Album();
    }

    public function index()
    {
        $albums = $this->album->getAll();
        View::redirect('admin/album/indexAlbum', compact('albums'));
    }

    public function show($id)
    {
        $album = $this->album->getById($id);
        View::redirect('album/show');
    }

    public function create()
    {
        View::redirect('admin/album/createAlbum');
    }

    public function store()
    {
        // kiểm tra validate dữ liệu
        if (!Validate::album($_POST)) {
            return Helper::back();
        }

        $album = [
            'name' => Helper::validateInput($_POST['name']),
            'description' => Helper::validateInput($_POST['description']),
        ];

        $album['image_url'] = Helper::upload($_FILES['image']['name'], $_FILES['image']['tmp_name']);

        $check = $this->album->create($album);

        if (!$check) {
            $_SESSION['error'] = 'Create failed.';
            return Helper::back();
        }

        $_SESSION['success'] = "You are create success";
        header('location:?controller=album&action=index&admin=1');
    }

    public function edit()
    {
        if (!Validate::isId($_GET['id'])) {
            Helper::back();
        }
        $album = $this->album->getById($_GET['id']);
        View::redirect('admin/album/editalbum', compact('album'));
    }

    public function update()
    {
        if (!Validate::isId($_GET['id'])) {
            Helper::back();
        }

        if (!Validate::album($_POST)) {
            Helper::back();
        }

        $album = [
            'name' => Helper::validateInput($_POST['name']),
            'description' => Helper::validateInput($_POST['description']),
        ];

        if (isset($_FILES['image']) && $_FILES['image']['name'] != null) {
            $album['image_url'] = Helper::upload($_FILES['image']['name'], $_FILES['image']['tmp_name']);
        }
        // pass validate thì sẽ upload table album
        $this->album->update($_GET['id'], $album);

        $_SESSION['success'] = "You are update success";
        header('location:?controller=album&action=index&admin=1');
    }

    public function delete()
    {
        if (!Validate::isId($_GET['id'])) {
            Helper::back();
        }
        $album = $this->album->getById($_GET['id']);
        if (!$album) {
            Helper::back();
        }

        unlink('uploads/' . $album['avata_url']);

        $this->album->delete($_GET['id']);

        $_SESSION['success'] = "You are delete success";
        header('location:?controller=album&action=index&admin=1');
    }
}
