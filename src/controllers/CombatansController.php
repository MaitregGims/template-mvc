<?php

namespace App\controllers;

use App\EntityManager;
use App\models\Combatants;
use App\Validator;

class CombatansController extends Controller

{
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = new EntityManager();
    }

    public function index()
    {
        $data = $this->entityManager->findAll('combattant');
        $this->render('combatant.html.twig', ["combatans" => $data]);
    }

}