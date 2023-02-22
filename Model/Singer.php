<?php

require_once "Model.php";
class Singer extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->setTableName('singers');
    }
}
