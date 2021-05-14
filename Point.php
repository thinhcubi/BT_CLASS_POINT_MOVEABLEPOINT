<?php

class Point
{
    public float $x;
    public float $y;

    public function __construct(float $x,float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX() : float
    {
        return $this->x;
    }
    public function getY(): float
    {
        return $this->y;
    }
    public function setXY(float $x,float $y): void
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY() : array
    {
        $arr = [];
        array_push($arr,$this->getX());
        array_push($arr,$this->getY());
    return $arr;
    }
    public function __toString(): string
    {
        return $this->getX()."<br>". $this->getY()."<br>". $this->getXY();
    }



}
