<?php

class Item {

    protected $name;

    protected $quality;

    protected $sellIn;

    public function __construct($name, $quality, $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function tick()
    {
        if ($this->quality > 50) {
            $this->quality = 50;
        }         

        if ($this->quality < 0) {
            $this->quality = 0;
        }
    }


}