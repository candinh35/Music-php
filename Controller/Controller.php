<?php

class Controller {
    public function __construct()
    {
        if (!isset($_SESSION['admin'])) {
            header('location: ?admin=1');
        }
    }
}