<?php

class BackstagePass extends Item
{

    public function __construct($name, $quality, $sellIn)
    {
        parent::__construct($name, $quality, $sellIn);
    }

    public function tick()
    {
        $this->quality = $this->quality + 1;

        if ($this->sellIn < 11) {
            $this->quality = $this->quality + 1;
        }

        if ($this->sellIn < 6) {
            $this->quality = $this->quality + 1;
        }

        $this->sellIn = $this->sellIn - 1;

        if ($this->sellIn < 0) {
            $this->quality = $this->quality - $this->quality;
        }

        parent::tick();
    }
}
