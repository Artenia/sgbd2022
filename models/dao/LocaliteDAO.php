<?php

class LocaliteDAO extends DAO {

    public function __construct () {
        parent::__construct("localites");
    }

    public function create ($data) {
        if ($data instanceof Localite) {
            return $data;
        }

        if (!is_object($data)) {
            return new Localite(
                isset($data['id']) ? $data['id'] : 0,
                $data['cp'],
                $data['nom']
            );
        }
        return false;
    }

}