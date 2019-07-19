<?php

class Sulfuras extends Item
{

    public function __construct($name, $quality, $sellIn)
    {
        parent::__construct($name, $quality, $sellIn);
    }

    public function tick()
    {
        parent::tick();
        
        $this->quality = 80; // LEGENDARY ITEM!!!        
    }
}
