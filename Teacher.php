<?php
class Teacher {
    public $fullName;
    public $subjectName;
    public $yearsOfWork;
    public function __construct($fullName, $subjectName, $yearsOfWork) {
        $this->fullName = $fullName;
        $this->subjectName = $subjectName;
        $this->yearsOfWork = $yearsOfWork;
    }
}
