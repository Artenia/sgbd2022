<?php

class SexeDAO extends DAO {

    public function __construct () {
        parent::__construct("sexes");
    }

    public function create ($data) {
        if ($data instanceof Sexe) {
            return $data;
        }

        if (!is_object($data)) {
            return new Sexe(
                isset($data['id']) ? $data['id'] : 0,
                $data['nom']
            );
        }
        return false;
    }

}