<?php

class AnimalLayer extends Layer
{

    public function __construct()
    {
        parent::__construct(new Aboyer());
    }
}