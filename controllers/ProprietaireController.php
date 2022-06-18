<?php

class ProprietaireController extends Controller {

    public function index () {
        $proprietaires = Proprietaire::all();
        $localites = Localite::all();
        include('../views/proprietaires/list.php');
    }

    public function store ($data) {
        $proprietaire = new Proprietaire(0, $data['nom'], $data['prenom'], $data['dn'], $data['adresse'], $data['fk_localite'], $data['tel'], $data['email'], $data['contact']);
        $proprietaire->save();
        return $this->list_xhr();
    }

    public function update ($data) {
        $proprietaire = new Proprietaire($data['id'], $data['nom'], $data['prenom'], $data['dn'], $data['adresse'], $data['fk_localite'], $data['tel'], $data['email'], $data['contact']);
        $proprietaire->save();
        return $this->list_xhr();
    }

    public function destroy ($data) {
        $proprietaire = Proprietaire::find($data['id']);
        if (!$proprietaire) {
            return false;
        }
        $proprietaire->delete();
        return $this->list_xhr();
    }

    public function list_xhr() {
        $proprietaires = Proprietaire::all();
        include('../views/proprietaires/list_xhr.php');
    }
}