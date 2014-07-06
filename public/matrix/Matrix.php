<?php

class Matrix
{
    public $matrix = array();

    public function __construct($node)
    {
        for ($i = 0; $i < $node; $i++) {
            $matrix[$i] = array();

            for ($j = $i+1; $j < $node; $j++) {
                $rand = rand(0, 1);
                $matrix[$i][$j] = $rand;

                // echo $i . "," . $j . "<br>";
            }
        }

        //echo "<pre>";
        //print_r($matrix);
        //echo "</pre>";
    }
}
