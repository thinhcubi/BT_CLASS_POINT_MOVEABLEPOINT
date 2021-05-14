<?php
include_once"Point.php";
class MoveablePoint extends Point
{
    public float $xSpeed;
    public float $ySpeed;
    public function __construct(float $x, float $y,float $xSpeed,float $ySpeed )
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getXSpeed(): float
    {
        return $this->xSpeed;
    }
    public function setXSpeed(float $xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }
    public function getYSpeed(): float
    {
        return $this->ySpeed;
    }
    public function setYSpeed(float $ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed() : array
    {
        $arr = [];
        array_push($arr,$this->getXSpeed());
        array_push($arr,$this->getYSpeed());
        return $arr;
    }
    public function __toString(): string
    {
       return $this->getYSpeed()."<br>".$this->getXSpeed()."<br>".$this->getSpeed();
    }

}