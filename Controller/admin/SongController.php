<?php
session_start();
$dir = str_replace('Controller\admin', '', __DIR__);
require_once $dir . "Model/Song.php";
require_once $dir . "Model/Album.php";
require_once $dir . "Model/Singer.php";
require_once $dir . "Model/Genre.php";
require_once $dir . "Helper/Helper.php";
require_once $dir . "App/core/View.php";
require_once $dir . "Controller/Controller.php";
require_once $dir . "Validation/Validate.php";

class SongController extends Controller
{
    private $song;
    private $album;
    private $singer;
    private $genre;

    public function __construct()
    {
        $this->song = new Song();
        $this->album = new Album();
        $this->singer = new Singer();
        $this->genre = new Genre();
        parent::__construct();
    }

    public function index()
    {
        $songs = $this->song->getNameCate();

        View::redirect('admin/song/indexSong', compact('songs'));
    }

    public function show($id)
    {
        $song = $this->song->getById($id);
        View::redirect('song/show');
    }

    public function create()
    {
        $albums = $this->album->getAll();
        $singers = $this->singer->getAll();
        $genres = $this->genre->getAll();
        View::redirect('admin/song/createSong', compact('albums', 'singers', 'genres'));
    }

    public function store()
    {
        // kiểm tra validate dữ liệu
        if (!Validate::createSong($_POST)) {
            Helper::back();
        }

        $song = [
            'name' => Helper::validateInput($_POST['name']),
            'price' => $_POST['price'],
            'file_url' => Helper::upload($_FILES['song']['name'], $_FILES['song']['tmp_name']),
            'image' => Helper::upload($_FILES['image']['name'], $_FILES['image']['tmp_name']),
            'album_id' => $_POST['album_id'],
            'singer_id' => $_POST['singer_id'],
            'genre_id' => $_POST['genre_id']
        ];

        $check = $this->song->create($song);

        if (!$check) {
            $_SESSION['error'] = 'Create failed.';
            return Helper::back();
        }

        $_SESSION['success'] = "You are create success";
        header('location:?controller=song&action=index&admin=1');
    }

    public function edit()
    {
        if (empty($_GET['id']) && !is_numeric($_GET['id'])) {
            Helper::back();
        }

        $albums = $this->album->getAll();
        $singers = $this->singer->getAll();
        $genres = $this->genre->getAll();
        $song = $this->song->getById($_GET['id']);

        View::redirect('admin/song/editSong', compact('song', 'albums', 'singers', 'genres'));
    }

    public function update()
    {
        if (empty($_GET['id']) && !is_numeric($_GET['id'])) {
            Helper::back();
        }
        if (!Validate::updateSong($_POST)) {
            Helper::back();
        }

        $song = [
            'name' => Helper::validateInput($_POST['name']),
            'price' => $_POST['price'],
            'album_id' => $_POST['album_id'],
            'singer_id' => $_POST['singer_id'],
            'genre_id' => $_POST['genre_id']
        ];

        if (isset($_FILES['song']) && $_FILES['song']['name'] != null) {
            $data = $this->song->getById($_GET['id']);
            unlink('uploads/' . $data['file_url']);

            $song['file_url'] = Helper::upload($_FILES['song']['name'], $_FILES['song']['tmp_name']);
        }

        if (isset($_FILES['image']) && $_FILES['image']['name'] != null) {
            $data = $this->song->getById($_GET['id']);
            unlink('uploads/' . $data['image']);

            $song['image'] = Helper::upload($_FILES['image']['name'], $_FILES['image']['tmp_name']);
        }

        // pass validate thì sẽ upload table song trước
        $this->song->update($_GET['id'], $song);

        $_SESSION['success'] = "You are update success";
        header('Location:?controller=song&action=index&admin=1');
    }

    public function delete()
    {
        if (empty($_GET['id'])  || !is_numeric($_GET['id'])) {
            return Helper::back();
        }
        
        $song = $this->song->getById($_GET['id']);
        if (!$song) {
            return Helper::back();
        }

        unlink('uploads/' . $song['file_url']);
        $this->song->delete($_GET['id']);

        $_SESSION['success'] = "You are delete success";
        header('location:?controller=song&action=index&admin=1');
    }
}
