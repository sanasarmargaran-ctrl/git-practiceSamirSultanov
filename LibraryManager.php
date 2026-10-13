<<<<<<< HEAD
﻿<?php
require_once 'BookItem.php';
require_once 'Reader.php';

class LibraryManager {
    public $catalog = [];
    public $readers = [];
    public $borrowed = [];

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

    public function isAvailable($id) {
        return isset($this->catalog[$id]) && $this->catalog[$id]->status === 'available';
    }

    public function giveBookToReader($bookId, $readerId) {
        if ($this->isAvailable($bookId) && isset($this->readers[$readerId])) {
            $this->catalog[$bookId]->status = 'borrowed';
            $this->borrowed[$bookId] = $readerId;
            return true;
        }
        return false;
    }

    public function receiveBookBack($bookId) {
        if (isset($this->borrowed[$bookId])) {
            $this->catalog[$bookId]->status = 'available';
            unset($this->borrowed[$bookId]);
            return true;
        }
        return false;
    }
}
=======
    public function removeBookSafe($id) {
        if (isset($this->catalog[$id]) && $this->catalog[$id]->status === 'available') {
            unset($this->catalog[$id]);
        }
    }
>>>>>>> hotfix/validation
