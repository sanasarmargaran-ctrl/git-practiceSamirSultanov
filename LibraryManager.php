<?php
require_once 'BookItem.php';
require_once 'Reader.php';

class LibraryManager {
    public $catalog = [];
    public $readers = [];

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

    public function findBookByName($query) {
        $results = [];
        foreach ($this->catalog as $book) {
            if (strpos(mb_strtolower($book->name), mb_strtolower($query)) !== false) {
                $results[] = $book;
            }
        }
        return $results;
    }

    public function registerReader(Reader $reader) {
        $this->readers[$reader->readerId] = $reader;
    }
}
