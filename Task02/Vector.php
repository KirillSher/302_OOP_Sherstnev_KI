<?php

namespace Sherstnev\Task02;

class Vector
{
    public int $x;
    public int $y;
    public int $z;

    public function __construct(int $x, int $y, int $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function add(Vector $vector): Vector
    {
        $new_vector = new Vector($vector->x, $vector->y, $vector->z);
        $new_vector->x += $this->x;
        $new_vector->y += $this->y;
        $new_vector->z += $this->z;

        return $new_vector;
    }

    public function sub(Vector $vector): Vector
    {
        $new_vector = new Vector($vector->x, $vector->y, $vector->z);
        $new_vector->x = $this->x - $vector->x;
        $new_vector->y = $this->y - $vector->y;
        $new_vector->z = $this->z - $vector->z;

        return $new_vector;
    }

    public function product(int $number): Vector
    {
        $new_vector = new Vector($this->x, $this->y, $this->z);
        $new_vector->x *= $number;
        $new_vector->y *= $number;
        $new_vector->z *= $number;

        return $new_vector;
    }

    public function scalarProduct(Vector $vector): int
    {
        $q = $this->x * $vector->x + $this->y * $vector->y + $this->z * $vector->z;

        return $q;
    }

    public function vectorProduct(Vector $vector): Vector
    {
        $new_vector = new Vector($vector->x, $vector->y, $vector->z);

        $new_vector->x = $this->y * $vector->z - $this->z * $vector->y;
        $new_vector->y = -1 * ($this->x * $vector->z - $this->z * $vector->x);
        $new_vector->z = $this->x * $vector->y - $this->y * $vector->x;

        return $new_vector;
    }

    public function __toString()
    {
        return "(" . $this->x . "; " . $this->y . "; " . $this->z . ")";
    }
}
