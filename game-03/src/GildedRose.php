<?php

namespace App;
class GildedRose
{
    public $item;

    public function __construct($item)
    {
        $this->item = $item;
    }

    public static function of($item) {
        return new $item;
    }

}
