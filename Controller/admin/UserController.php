<?php
session_start();
$dir = str_replace('Controller\admin', '', __DIR__);
require_once $dir . "Model/User.php";
require_once $dir . "Helper/Helper.php";
require_once $dir . "Validation/Validate.php";
require_once $dir . "App/core/View.php";
require_once $dir . "Controller/Controller.php";

class UserController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
        parent::__construct();
    }

    public function index()
    {
        $users = $this->user->getAll();
        View::redirect('admin/user/indexUser', compact('users'));
    }

    public function show($id)
    {
        $user = $this->user->getById($id);
        View::redirect('user/show');
    }

    public function create()
    {
        View::redirect('admin/user/createUser');
    }

    public function store()
    {
        // kiểm tra validate dữ liệu
        if (!Validate::createUser($_POST)) {
            Helper::back();
        }

        if ($this->user->getByEmail($_POST['email'])) {
            $_SESSION['error'] = "Email already exist, please choose email another";
            Helper::back();
        }

        $user = [
            'name' => Helper::validateInput($_POST['name']),
            'email' => Helper::validateInput($_POST['email']),
            'password' => md5(Helper::validateInput($_POST['password'])),
        ];

        if (isset($_FILES['image']) && $_FILES['image']['name'] != null) {
            $user['image'] = Helper::upload($_FILES['image']['name'], $_FILES['image']['tmp_name']);
        }

        $this->user->create($user);

        $_SESSION['success'] = "You are create success";
        View::redirect('admin/user/indexUser');
    }

    public function edit()
    {
        if (empty($_GET['id']) && !is_numeric($_GET['id'])) {
            Helper::back();
        }
        $user = $this->user->getById($_GET['id']);
        View::redirect('admin/user/editUser', compact('user'));
    }

    public function update()
    {
        if (empty($_GET['id']) && !is_numeric($_GET['id'])) {
            Helper::back();
        }
        if (!Validate::updateUser($_POST)) {
            Helper::back();
        }
        $data = $this->user->getById($_GET['id']);
        // kiểm tra xem nếu cập nhập mà khác email thì xem có bị trùng nhau không
        if ($data['email'] != $_POST['email']) {
            if ($this->user->getByEmail($_POST['email'])) {
                $_SESSION['error'] = "Email already exist, please choose email another";
                Helper::back();
            }
        }

        $user = [
            'name' => Helper::validateInput($_POST['name']),
            'email' => Helper::validateInput($_POST['email']),
            'role' => $_POST['role']
        ];

        if (isset($_FILES['image']) && $_FILES['image']['name'] != null) {
            $user['image'] = Helper::upload($_FILES['image']['name'], $_FILES['image']['tmp_name']);
        }

        $this->user->update($_GET['id'], $user);

        $_SESSION['success'] = "You are update success";
        header('Location:?controller=user&action=index&admin=1');
    }

    public function delete()
    {
        if (empty($_GET['id']) && !is_numeric($_GET['id'])) {
            return Helper::back();
        }

        $user = $this->user->getById($_GET['id']);
        if (!$user) {
            return Helper::back();
        }

        unlink('uploads/' . $user['image']);
        $this->user->delete($_GET['id']);

        $_SESSION['success'] = "You are delete success";
        header('location:?controller=user&action=index&admin=1');
    }
}
