<?php

class Localite extends Entity {
    protected $id;
    protected $cp;
    protected $nom;
    protected static $dao_name = "LocaliteDAO";
    public function __construct ($id, $cp, $nom) {
        $this->id = $id;
        $this->cp = $cp;
        $this->nom = $nom;
        parent::__construct(self::$dao_name);
    }

    public function __toString () {
        return $this->cp." | ".$this->nom;
    }
}