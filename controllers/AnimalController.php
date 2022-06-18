<?php

class AnimalController extends Controller {

    public function index () {
        $animaux = Animal::all();
        $races = Race::all();
        $sexes = Sexe::all();
        $proprietaires = Proprietaire::all();
        include('../views/animaux/list.php');
    }

    public function store ($data) {
        $animal = new Animal(0, $data['nom'], $data['fk_sexe'], $data['fk_race'], $data['chaleur'], $data['dn'], $data['veto'], $data['puce'], $data['fk_proprio']);
        $animal->save();
        return $this->list_xhr();
    }

    public function update ($data) {
        $animal = new Animal($data['id'], $data['nom'], $data['fk_sexe'], $data['fk_race'], $data['chaleur'], $data['dn'], $data['veto'], $data['puce'], $data['fk_proprio']);
        $animal->save();
        return $this->list_xhr();
    }

    public function destroy ($data) {
        $animal = Animal::find($data['id']);
        if (!$animal) {
            return false;
        }
        $animal->delete();
        return $this->list_xhr();
    }

    public function list_xhr() {
        $animaux = Animal::all();
        include('../views/animaux/list_xhr.php');
    }
}