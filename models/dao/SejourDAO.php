<?php

class SejourDAO extends DAO {

    public function __construct () {
        parent::__construct("sejours");
    }

    public function create ($data) {
        if ($data instanceof Sejour) {
            return $data;
        }

        if (!is_object($data)) {
            return new Sejour(
                isset($data['id']) ? $data['id'] : 0,
                $data['fk_animal'],
                $data['debut'],
                $data['fin']
            );
        }
        return false;
    }

    public function store ($data , $statement = false) {
        $sejour = $this->create($data);
        if (!$sejour) {
            return false;
        }
        $statement = $this->db->prepare("INSERT INTO {$this->table} (fk_animal,debut,fin) VALUES (?,?,?)");
        parent::store([$sejour->animal->id, $sejour->debut,$sejour->fin], $statement);
    }

}