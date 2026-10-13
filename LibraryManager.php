<?php
require_once 'BookItem.php';

class LibraryManager {
    public $catalog = [];

    public function addNewBook(BookItem $book) {
        $this->catalog[$book->id] = $book;
    }

    public function deleteBook($id) {
        if (isset($this->catalog[$id])) {
            unset($this->catalog[$id]);
        }
    }

    public function getAllBooks() {
        return $this->catalog;
    }
}
