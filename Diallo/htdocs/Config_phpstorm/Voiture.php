<?php


namespace App;


class Voiture
{
  private string $color;
  private float $motorisation;
  private int $vitessMax ;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Voiture
     */
    public function setColor(string $color): Voiture
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return float
     */
    public function getMotorisation(): float
    {
        return $this->motorisation;
    }

    /**
     * @param float $motorisation
     * @return Voiture
     */
    public function setMotorisation(float $motorisation): Voiture
    {
        $this->motorisation = $motorisation;
        return $this;
    }

    /**
     * @return int
     */
    public function getVitessMax(): int
    {
        return $this->vitessMax;
    }

    /**
     * @param int $vitessMax
     * @return Voiture
     */
    public function setVitessMax(int $vitessMax): Voiture
    {
        $this->vitessMax = $vitessMax;
        return $this;
    }
  
}