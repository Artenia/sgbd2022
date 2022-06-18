<?php

class Sejour extends Entity {

    protected $id;
    protected $animal;
    protected $debut;
    protected $fin;
    protected static $dao_name = "SejourDAO";

    public function __construct ($id, $animal, $debut, $fin) {
        $this->id = $id;
        $this->animal = $animal;
        $this->debut = $debut;
        $this->fin = $fin;
        parent::__construct(self::$dao_name);
    }

    public function __toString () {
        return $this->animal."|".$this->debut."|".$this->fin;
    }

    public function __get ($prop) {
        if (property_exists($this, $prop)) {
            if ($prop == "animal") {
                return $this->animal();
            }
            /*elseif ($prop == "proprio") {
                return $this->proprio();
            }*/
            return $this->$prop;
        }
    }

    protected function animal () {
        if($this->animal instanceof Animal) {
            return $this->animal;
        }
        $this->animal = Animal::find($this->animal);
        return $this->animal;
    }

    /*protected function proprio () {
        if ($this->proprio) {
            return $this->proprio;
        }
        $this->proprio = Animal::where('id', $this->animal);
        return $this->proprio;
    }*/
}
