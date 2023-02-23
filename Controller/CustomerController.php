<?php
session_start();
$dir = str_replace('Controller', '', __DIR__);
require_once $dir . "Model/User.php";
require_once $dir . "Model/Album.php";
require_once $dir . "Helper/Helper.php";
require_once $dir . "App/core/View.php";
require_once $dir . "Validation/Validate.php";

class CustomerController
{
    private $user;
   
    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        if (!Validate::isId($_GET['id'])) {
            return Helper::back();
        }

        $user = $this->user->getById($_GET['id']);
        $users = $this->user->getLimit(8);
        View::redirect('client/setting', compact('user', 'users'));
    }

    public function update()
    {
        if ($_POST['name'] == null) {
            $_SESSION['error'] = 'Please fill in all required fields.';
            return Helper::back();
        }

        if (!Validate::isId($_GET['id'])) {
            return Helper::back();
        }

        $user = [
            'name' => Helper::validateInput($_POST['name']),
        ];

        if (isset($_FILES['image']) && $_FILES['image']['name'] != null) {
            $user['image'] = Helper::upload($_FILES['image']['name'], $_FILES['image']['tmp_name']);
        }
        $this->updateUser($_GET['id'], $user);
    }

    public function rechage()
    {
        if (!Validate::isId($_GET['id'])) {
            return Helper::back();
        }

        $data = $this->user->getById($_GET['id']);

        $user = [
            'wallet' => $_POST['wallet'] + $data['wallet'],
        ];

        $this->updateUser($_GET['id'], $user);
    }

    public function setting()
    {
        if (!Validate::isId($_GET['id'])) {
            return Helper::back();
        }

        $user = $this->user->getById($_GET['id']);
        $users = $this->user->getLimit(8);
        View::redirect('client/setting', compact('user', 'users'));
    }

    public function updatePassword()
    {
        if (!Validate::isId($_GET['id'])) {
            return Helper::back();
        }

        if ($_POST['password'] != $_POST['password_confirmation']) {
            $_SESSION['error'] = 'password and password confirmation not same.';
            return Helper::back();
        }

        $user = $this->user->getById($_GET['id']);

        if ($user['password'] != md5($_POST['password_old'])) {
            $_SESSION['error'] = 'password incorrect.';
            return Helper::back();
        }

        $newPassword['password'] = md5($_POST['password']);
        $this->user->update($_GET['id'], $newPassword);

        $_SESSION['success'] = "You are update success";

        header('Location:?controller=customer&action=index&id=5');
    }

    public function updateUser($id, $user)
    {
        $this->user->update($id, $user);

        $_SESSION['client'] = $this->user->getById($id);

        $_SESSION['success'] = "You are update success";

        header('Location:?controller=customer&action=index&id=5');
    }
}
