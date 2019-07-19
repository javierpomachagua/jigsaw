<?php

class Normal extends Item
{

    public function __construct($name, $quality, $sellIn)
    {
        parent::__construct($name, $quality, $sellIn);
    }

    public function tick()
    {
        if ($this->quality > 0) {
            $this->quality = $this->quality - 1;
        }

        $this->sellIn = $this->sellIn - 1;

        if ($this->sellIn < 0) {
            if ($this->quality > 0) {
                $this->quality = $this->quality - 1;
            }
        }

        parent::tick();
    }
}
