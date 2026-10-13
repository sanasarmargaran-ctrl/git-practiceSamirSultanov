<?php
class BookItem {
    public $id;
    public $name;
    public $authorName;
    public $status;

    public function __construct($id, $name, $authorName) {
        $this->id = $id;
        $this->name = $name;
        $this->authorName = $authorName;
        $this->status = 'available';
    }
}
