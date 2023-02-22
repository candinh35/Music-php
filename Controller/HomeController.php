<?php
session_start();
$dir = str_replace('Controller', '', __DIR__);
require_once $dir . "Model/User.php";
require_once $dir . "Model/Song.php";
require_once $dir . "Model/Singer.php";
require_once $dir . "Model/Genre.php";
require_once $dir . "Model/Album.php";
require_once $dir . "Helper/Helper.php";
require_once $dir . "App/core/View.php";

class HomeController
{
    private $user;
    private $song;
    private $album;
    private $singer;
    private $genre;

    public function __construct()
    {
        $this->user = new User();
        $this->song = new Song();
        $this->album = new Album();
        $this->singer = new Singer();
        $this->genre = new Genre();
    }

    public function index()
    {
        $newSongs = $this->song->getNewSong(5);
        $songs = $this->song->getLimit(12);
        $albums = $this->album->getLimit(2);
        $singers = $this->singer->getLimit(3);
        $genres = $this->genre->getLimit(2);
        View::redirect('client/home', compact('songs', 'newSongs', 'albums', 'singers', 'genres'));
    }

    public function chart()
    {
        $songs = $this->song->getNewSong(18);

        View::redirect('client/charts', compact('songs'));
    }

    public function song()
    {
        $songs = $this->song->getNameCate();

        View::redirect('client/song', compact('songs'));
    }

    public function artists()
    {
        $singers = $this->singer->getAll();

        View::redirect('client/artists', compact('singers'));
    }
}
