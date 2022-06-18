<?php

class BehaviorController extends Controller {

    public function index () {
        $animal = new AnimalLayer();
        $proprietaire = new ProprietaireLayer();
        include('../views/behaviors/behavior.php');
    }

}