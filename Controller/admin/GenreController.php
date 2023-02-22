<?php
session_start();
$dir = str_replace('Controller\admin', '', __DIR__);
require_once $dir . "Model/Genre.php";
require_once $dir . "Helper/Helper.php";
require_once $dir . "App/core/View.php";
require_once $dir . "Controller/Controller.php";
require_once $dir . "Validation/Validate.php";

class GenreController extends Controller
{
    private $genre;

    public function __construct()
    {
        $this->genre = new Genre();
    }

    public function index()
    {
        $genres = $this->genre->getAll();
        View::redirect('admin/genre/indexGenre', compact('genres'));
    }

    public function show($id)
    {
        $genre = $this->genre->getById($id);
        View::redirect('genre/show');
    }

    public function create()
    {
        View::redirect('admin/genre/createGenre');
    }

    public function store()
    {
        // kiểm tra validate dữ liệu
        if (!Validate::genre($_POST)) {
            return Helper::back();
        }

        $genre = [
            'name' => Helper::validateInput($_POST['name']),
            'description' => Helper::validateInput($_POST['description']),
        ];

        $this->genre->create($genre);

        $_SESSION['success'] = "You are create success";
        header('location:?controller=genre&action=index&admin=1');
    }

    public function edit()
    {
        if (empty($_GET['id']) && !is_numeric($_GET['id'])) {
            Helper::back();
        }

        $genre = $this->genre->getById($_GET['id']);

        View::redirect('admin/genre/editGenre', compact('genre'));
    }

    public function update()
    {
        if (empty($_GET['id']) && !is_numeric($_GET['id'])) {
            Helper::back();
        }
        if (!Validate::genre($_POST)) {
            return Helper::back();
        }

        $genre = [
            'name' => Helper::validateInput($_POST['name']),
            'description' => Helper::validateInput($_POST['description']),
        ];

        // pass validate thì sẽ upload table genre
        $this->genre->update($_GET['id'], $genre);

        $_SESSION['success'] = "You are update success";
        header('location:?controller=genre&action=index&admin=1');
    }

    public function delete()
    {
        if (empty($_GET['id']) && !is_numeric($_GET['id'])) {
            return Helper::back();
        }
        
        $this->genre->delete($_GET['id']);

        $_SESSION['success'] = "You are delete success";
        header('location:?controller=genre&action=index&admin=1');
    }
}
