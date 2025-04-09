<?php

namespace App\controllers;

use App\EntityManager;
use App\models\Combatants;
use App\Validator;

class MusiqueController extends Controller

{
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = new EntityManager();
    }

    public function index()
    {
        $this->render('homepage.php');
    }

    public function displaySong()
    {
        $data = $this->entityManager->findallWithSingerName();
        $this->render('songList.html.twig', ["song" => $data]);
    }

    public function findSong()
    {
        $data = $this->entityManager->findWithstart($_POST['titre'] . '%');
        $this->render('songList.html.twig', ["song" => $data]);
    }

    public function findByArtist()
    {
        $data = $this->entityManager->findWithArtistName($_POST['artist'] . '%');
        $this->render('songList.html.twig', ["song" => $data]);
    }

    public function delete()
    {
        $data = $this->entityManager->deleteSong($_POST['delete']);

        $this->displaySong();
    }

}