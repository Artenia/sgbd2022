<?php

class ProprietaireDAO extends DAO {

    public function __construct () {
        parent::__construct("proprietaires");
    }

    public function create ($data) {
        if ($data instanceof Proprietaire) {
            return $data;
        }

        if (!is_object($data)) {
            return new Proprietaire(
                isset($data['id']) ? $data['id'] : 0,
                $data['nom'],
                $data['prenom'],
                $data['dn'],
                $data['adresse'],
                $data['fk_localite'],
                $data['tel'],
                $data['email'],
                $data['contact']
            );
        }
        return false;
    }

    public function store ($data , $statement = false) {
        $proprietaire = $this->create($data);
        if (!$proprietaire) {
            return false;
        }
        $statement = $this->db->prepare("INSERT INTO {$this->table} (nom,prenom,dn,adresse,fk_localite,tel,email,
                                                contact) VALUES (?,?,?,?,?,?,?,?)");
        parent::store([$proprietaire->nom, $proprietaire->prenom,$proprietaire->dn,$proprietaire->adresse,
                        $proprietaire->localite->id,$proprietaire->tel, $proprietaire->email, $proprietaire->contact],
                        $statement);
    }

    public function update ($data, $statement = false) {
        $proprietaire = $this->create($data);
        if (!$proprietaire) {
            return false;
        }
        $statement = $this->db->prepare("UPDATE {$this->table} SET nom = ?, prenom = ?, dn = ?, adresse = ?, 
                                                fk_localite = ?, tel = ?, email = ?, contact = ? WHERE id = ?");
        parent::store([$proprietaire->nom, $proprietaire->prenom,$proprietaire->dn,$proprietaire->adresse,
                        $proprietaire->localite->id,$proprietaire->tel, $proprietaire->email, $proprietaire->contact,
                        $proprietaire->id], $statement);
    }
}