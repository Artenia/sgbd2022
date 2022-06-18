<?php

class ProprietaireLayer extends Layer
{

    public function __construct()
    {
        parent::__construct(new Parler());
    }
}