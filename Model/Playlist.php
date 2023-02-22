<?php

require_once "Model.php";
class Playlist extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->setTableName('playlists');
    }
}
