<?php

abstract class Controller {

    public function index () {
        var_dump('action index not defined');
    }

    public function store ($data) {
        var_dump('action store not defined');
    }

    public function destroy ($id) {
        var_dump('action destroy not defined');
    }

    public function update ($data) {
        var_dump('action update not defined');
    }

}