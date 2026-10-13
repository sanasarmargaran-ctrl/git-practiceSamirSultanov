<?php
class Student {
    public $fullName;
    public $groupNumber;
    public $score;
    public function __construct($fullName, $groupNumber, $score) {
        $this->fullName = $fullName;
        $this->groupNumber = $groupNumber;
        $this->score = $score;
    }
}
