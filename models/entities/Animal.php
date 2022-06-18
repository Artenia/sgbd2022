<?php

class Animal extends Entity {

    protected $id;
    protected $nom;
    protected $sexe;
    protected $race;
    protected $chaleur;
    protected $dn;
    protected $veto;
    protected $puce;
    protected $proprietaire;
    protected static $dao_name = "AnimalDAO";

    public function __construct ($id, $nom, $sexe, $race, $chaleur, $dn, $veto, $puce, $proprietaire) {
        $this->id = $id;
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->race = $race;
        $this->chaleur = $chaleur;
        $this->dn = $dn;
        $this->veto = $veto;
        $this->puce = $puce;
        $this->proprietaire = $proprietaire;
        parent::__construct(self::$dao_name);
    }

    public function __toString () {
        return $this->nom." | ".$this->sexe." | ".$this->race." | ".$this->chaleur." | ".$this->dn." | ".$this->veto.
            " | ".$this->puce." | ".$this->proprietaire;
    }

    public function __get ($prop) {
        if (property_exists($this, $prop)) {
            if ($prop == "sexe") {
                return $this->sexe();
            }
            elseif ($prop == "race") {
                return $this->race();
            }
            elseif ($prop == "proprietaire") {
                return $this->proprietaire();
            }
            return $this->$prop;
        }
    }

    protected function sexe () {
        if($this->sexe instanceof Sexe) {
            return $this->sexe;
        }
        $this->sexe = Sexe::find($this->sexe);
        return $this->sexe;
    }

    protected function race () {
        if($this->race instanceof Race) {
            return $this->race;
        }
        $this->race = Race::find($this->race);
        return $this->race;
    }

    protected function proprietaire () {
        if($this->proprietaire instanceof Proprietaire) {
            return $this->proprietaire;
        }
        $this->proprietaire = Proprietaire::find($this->proprietaire);
        return $this->proprietaire;
    }

}
