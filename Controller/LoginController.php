<?php
session_start();
$dir = str_replace('Controller', '', __DIR__);
require_once $dir . "Model/User.php";
require_once $dir . "Helper/Helper.php";
require_once $dir . "App/core/View.php";
require_once $dir . "Validation/Validate.php";
class LoginController
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        View::redirect('client/login');
    }

    public function login()
    {
        if (empty($_POST['email']) && empty($_POST['password'])) {
            $_SESSION['error'] = "You are fill all input";
           return Helper::back();
        }
        // mã hóa mật khẩu 
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $data = $this->user->loginClient($email, $password);
        if (!$data) {
            $_SESSION['error'] = "Incorrect account or password";
           return Helper::back();
        }

        $_SESSION['client'] = $data;
        return header('location:?');
    }

    public function register()
    {
        View::redirect('client/register');
    }

    public function sigin()
    {
        // kiểm tra validate dữ liệu
        if (!Validate::createUser($_POST)) {
            Helper::back();
        }

        if ($this->user->getByEmailClient($_POST['email'])) {
            $_SESSION['error'] = "Email already exist, please choose email another";
            Helper::back();
        }

        $user = [
            'name' => Helper::validateInput($_POST['name']),
            'email' => Helper::validateInput($_POST['email']),
            'password' => md5(Helper::validateInput($_POST['password'])),
        ];

        $check =  $this->user->create($user);

        if (!$check) {
            $_SESSION['error'] = 'Create failed.';
            return Helper::back();
        }

        $_SESSION['success'] = "You are create success";
        View::redirect('client/register');
    }

    public function logout()
    {
        unset($_SESSION['client']);
        header('location: ?');
    }
}
