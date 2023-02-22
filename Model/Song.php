<?php

require_once "Model.php";
class Song extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->setTableName('songs');
    }

    public function getNameCate()
    {
        $sql = "SELECT
        s.id,
        s.name,
        s.image,
        s.price,
        s.file_url,
        a.name as name_album,
        sg.name as name_singer,
        g.name as name_genre
        FROM songs s
        INNER JOIN albums a ON s.album_id = a.id
        INNER JOIN singers sg ON s.singer_id = sg.id
        INNER JOIN genres g ON s.genre_id = g.id";

        $result = $this->connect->query($sql);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNewSong($number)
    {
        $sql = "SELECT
        s.id,
        s.name,
        s.image,
        s.price,
        s.file_url,
        a.name as name_album,
        sg.name as name_singer,
        g.name as name_genre
        FROM songs s
        INNER JOIN albums a ON s.album_id = a.id
        INNER JOIN singers sg ON s.singer_id = sg.id
        INNER JOIN genres g ON s.genre_id = g.id
        ORDER BY s.id DESC 
        LIMIT 0, $number";

        $result = $this->connect->query($sql);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
