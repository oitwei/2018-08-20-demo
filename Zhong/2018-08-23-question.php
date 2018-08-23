<?php

class People
{
    private $height;
    private $weight;

    public function __construct($x, $y)
    {
        $this->height = $x;
        $this->weight = $y;
    }


    public function getBMI()
    {
        return ($this->height + $this->weight) * 2;
    }
}

$s = new People(142, 50);
var_dump($s->getBMI());

// public private protected
// 物件的屬性　方法(function)