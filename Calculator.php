<?php
class Calculator {
    public function sum($x, $y) { return $x + $y; }
    public function sub($x, $y) { return $x - $y; }
    public function mult($x, $y) { return $x * $y; }
    public function div($x, $y) {
        if ($y === 0) return false;
        return $x / $y;
    }
}
