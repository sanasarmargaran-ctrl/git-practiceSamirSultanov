<?php
class Reader {
    public $readerId;
    public $fullName;

    public function __construct($id, $name) {
        $this->readerId = $id;
        $this->fullName = $name;
    }
}
