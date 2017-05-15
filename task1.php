<?php


class Turtle {
    private $x = 0, $y = 0, $len = 4;

    public function left(){
        if ($this->x != 0) {
            $this->x--;
        }
    }
    public function right(){
        if ($this->x < $this->len) {
            $this->x++;
        }
    }
    public function top(){
        if ($this->y < $this->len) {
            $this->y++;
        }
    }
    public function bottom(){
        if ($this->y != 0) {
            $this->y--;
        }
    }
}