<?php

require_once "Model.php";
class Album extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->setTableName('albums');
    }

}
