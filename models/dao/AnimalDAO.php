<?php

class AnimalDAO extends DAO {

    public function __construct () {
        parent::__construct("animaux");
    }

    public function create ($data) {
        if ($data instanceof Animal) {
            return $data;
        }

        if (!is_object($data)) {
            return new Animal(
                isset($data['id']) ? $data['id'] : 0,
                $data['nom'],
                $data['fk_sexe'],
                $data['fk_race'],
                $data['chaleur'],
                $data['dn'],
                $data['veto'],
                $data['puce'],
                $data['fk_proprio']
            );
        }
        return false;
    }

    public function store ($data , $statement = false) {
        $animal = $this->create($data);
        if (!$animal) {
            return false;
        }
        $statement = $this->db->prepare("INSERT INTO {$this->table} (nom,fk_sexe,fk_race,chaleur,dn,veto,puce,
                                                fk_proprio) VALUES (?,?,?,?,?,?,?,?)");
        parent::store([$animal->nom, $animal->sexe->id,$animal->race->id,$animal->chaleur,$animal->dn,$animal->veto,
                        $animal->puce,$animal->proprietaire->id], $statement);
    }

    public function update ($data, $statement = false) {
        $animal = $this->create($data);
        if (!$animal) {
            return false;
        }
        $statement = $this->db->prepare("UPDATE {$this->table} SET nom = ?, fk_sexe = ?, fk_race =?, chaleur = ?, 
                                                dn = ?, veto = ?, puce = ?, fk_proprio = ? WHERE id = ?");
        parent::store([$animal->nom, $animal->sexe->id,$animal->race->id,$animal->chaleur,$animal->dn,$animal->veto,
                        $animal->puce,$animal->proprietaire->id,$animal->id], $statement);
    }

}