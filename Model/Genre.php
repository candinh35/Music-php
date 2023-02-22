<?php

require_once "Model.php";
class Genre extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->setTableName('genres');
    }
}
