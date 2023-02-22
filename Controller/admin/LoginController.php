<?php
session_start();
$dir = str_replace('Controller\admin', '', __DIR__);
require_once $dir . "Model/User.php";
require_once $dir . "Helper/Helper.php";
require_once $dir . "App/core/View.php";
class LoginController 
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        View::redirect('admin/login');
    }

    public function login()
    {
        if (empty($_POST['email']) && empty($_POST['email'])) {
            $_SESSION['error'] = "You are fill all input";
            Helper::back();
        }
        if(isset($_POST) && $_POST['email'] == null){
            header('location: ?admin=1');
        }
        // mã hóa mật khẩu 
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        if ($this->user->login($email, $password) < 0) {
            $_SESSION['error'] = "Incorrect account or password";
            Helper::back();
        }

        $_SESSION['admin'] = $this->user->getByEmail($email);

        return View::redirect('admin/dashboard');
    }

    public function logout()
    {
        unset($_SESSION['admin']);
        header('location: ?admin=1');
    }

}
