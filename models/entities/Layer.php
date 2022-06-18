<?php

abstract class Layer {
    protected $speakBehavior;

    public function __construct ($speakBehavior) {
        $this->speakBehavior = $speakBehavior;
    }

    public function speak () {
        $this->speakBehavior->speak();
    }

}