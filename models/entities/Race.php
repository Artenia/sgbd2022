<?php

class Race extends Entity {
    protected $id;
    protected $nom;
    protected static $dao_name = "RaceDAO";
    public function __construct ($id, $nom) {
        $this->id = $id;
        $this->nom = $nom;
        parent::__construct(self::$dao_name);
    }

    public function __toString () {
        return $this->nom;
    }
}