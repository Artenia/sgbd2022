<?php

class RaceDAO extends DAO {

    public function __construct () {
        parent::__construct("races");
    }

    public function create ($data) {
        if ($data instanceof Race) {
            return $data;
        }

        if (!is_object($data)) {
            return new Race(
                isset($data['id']) ? $data['id'] : 0,
                $data['nom']
            );
        }
        return false;
    }

}