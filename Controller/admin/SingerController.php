<?php
session_start();
$dir = str_replace('Controller\admin', '', __DIR__);
require_once $dir . "Model/Singer.php";
require_once $dir . "Helper/Helper.php";
require_once $dir . "App/core/View.php";
require_once $dir . "Controller/Controller.php";
require_once $dir . "Validation/Validate.php";

class SingerController extends Controller
{
    private $singer;

    public function __construct()
    {
        $this->singer = new singer();
    }

    public function index()
    {
        $singers = $this->singer->getAll();
        View::redirect('admin/singer/indexSinger', compact('singers'));
    }

    public function show($id)
    {
        $singer = $this->singer->getById($id);
        View::redirect('singer/show');
    }

    public function create()
    {
        View::redirect('admin/singer/createSinger');
    }

    public function store()
    {
        // kiểm tra validate dữ liệu
        if (!Validate::singer($_POST)) {
            return Helper::back();
        }

        $singer = [
            'name' => Helper::validateInput($_POST['name']),
            'description' => Helper::validateInput($_POST['description']),
        ];
        $singer['avata_url'] = Helper::upload($_FILES['image']['name'], $_FILES['image']['tmp_name']);
        $this->singer->create($singer);

        $_SESSION['success'] = "You are create success";
        header('location:?controller=singer&action=index&admin=1');

    }

    public function edit()
    {
        if (!Validate::isId($_GET['id'])) {
            Helper::back();
        }
        $singer = $this->singer->getById($_GET['id']);
        View::redirect('admin/singer/editSinger', compact('singer'));
    }

    public function update()
    {
        if (!Validate::isId($_GET['id'])) {
            Helper::back();
        }
        if (!Validate::singer($_POST)) {
            Helper::back();
        }

        $singer = [
            'name' => Helper::validateInput($_POST['name']),
            'description' => Helper::validateInput($_POST['description']),
        ];

        if (isset($_FILES['image']) && $_FILES['image']['name'] != null) {
            $singer['avata_url'] = Helper::upload($_FILES['image']['name'], $_FILES['image']['tmp_name']);
        }
        // pass validate thì sẽ upload table singer
        $this->singer->update($_GET['id'], $singer);

        $_SESSION['success'] = "You are update success";
        header('location:?controller=singer&action=index&admin=1');

    }

    public function delete()
    {
        if (!Validate::isId($_GET['id'])) {
            Helper::back();
        }

        $singer = $this->singer->getById($_GET['id']);
        if (!$singer) {
            return Helper::back();
        }

        unlink('uploads/' . $singer['avata_url']);

        $this->singer->delete($_GET['id']);

        $_SESSION['success'] = "You are delete success";
        header('location:?controller=singer&action=index&admin=1');
    }

}
