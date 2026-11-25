<?php

class Shape
{
    private string $color;
    private int $x;
    private int $y;
    private int $width;
    private int $height;

    public function __construct(
        string $color,
        int $x,
        int $y,
        int $width = 200,
        int $height = 200
    ) {
        $this->color = $color;
        $this->x = $x;
        $this->y = $y;
        $this->width = $width;
        $this->height = $height;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function render(): string
    {
        $color = htmlspecialchars($this->color, ENT_QUOTES, 'UTF-8');

        return sprintf(
            '<div class="shape" style="background-color: %s; left: %dpx; top: %dpx; width: %dpx; height: %dpx;"></div>',
            $color,
            $this->x,
            $this->y,
            $this->width,
            $this->height
        );
    }
}
