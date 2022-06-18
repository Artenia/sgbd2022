<?php

class SejourController extends Controller {

    public function index () {
        $sejours = Sejour::all();
        $animaux = Animal::all();
        include('../views/sejours/list.php');
    }

    public function store ($data) {
        $sejour = new Sejour(0, $data['fk_animal'], $data['debut'], $data['fin']);
        $sejour->save();
        return $this->list_xhr();
    }

    public function destroy ($data) {
        $sejour = Sejour::find($data['id']);
        if (!$sejour) {
            return false;
        }
        $sejour->delete();
        return $this->list_xhr();
    }

    public function list_xhr() {
        $sejours = Sejour::all();
        include('../views/sejours/list_xhr.php');
    }
}