<?php

class Proprietaire extends Entity {

    protected $id;
    protected $nom;
    protected $prenom;
    protected $dn;
    protected $adresse;
    protected $localite;
    protected $tel;
    protected $email;
    protected $contact;
    protected static $dao_name = "ProprietaireDAO";

    public function __construct ($id, $nom, $prenom, $dn, $adresse, $localite, $tel, $email, $contact) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dn = $dn;
        $this->adresse = $adresse;
        $this->localite = $localite;
        $this->tel = $tel;
        $this->email = $email;
        $this->contact = $contact;
        parent::__construct(self::$dao_name);
    }

    public function __toString () {
        return $this->nom." | ".$this->prenom." | ".$this->dn." | ".$this->adresse." | ".$this->localite." | "
            .$this->tel." | ".$this->email." | ".$this->contact;
    }

    public function __get ($prop) {
        if (property_exists($this, $prop)) {
            if ($prop == "localite") {
                return $this->localite();
            }
            return $this->$prop;
        }
    }

    protected function localite () {
        if($this->localite instanceof Localite) {
            return $this->localite;
        }
        $this->localite = Localite::find($this->localite);
        return $this->localite;
    }


}
