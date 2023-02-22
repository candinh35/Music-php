<?php
session_start();
$dir = str_replace('Controller\admin', '', __DIR__);
require_once $dir . "App/core/View.php";
require_once $dir . "Controller/Controller.php";

class DashboardController extends Controller
{

    public function index()
    {
        return View::redirect('admin/dashboard');
    }
}
