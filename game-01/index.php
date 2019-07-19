<?php

class Game01
{
    protected $subset;
    protected $sum;

    public function __construct($subset, $sum)
    {
        $this->subset = $subset;
        $this->sum    = $sum;
    }

    /**
     * Play the game
     */
    public function play()
    {
        $result = [];

        array_reduce($this->subset, function($carry, $key) use (&$result) {
            if ($carry + $key == $this->sum) {
                array_push($result, $carry, $key);
            }
            return $key;
        });

        // Otra solución
        
        // foreach ($this->subset as $key => $number) {

        //     if ($key > 0) {

        //         if ($this->subset[$key - 1] + $this->subset[$key] == $this->sum) {

        //             $result[] = $this->subset[$key - 1];
        //             $result[] = $this->subset[$key];
        //         }
        //     }
        // }

        return $result;
    }
}

$game   = new Game01([5, 2, 8, 14, 0], 10);
$result = $game->play();
echo 'Valores: ' . implode(',', $result);
