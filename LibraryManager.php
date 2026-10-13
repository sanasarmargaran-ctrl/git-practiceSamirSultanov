    public function removeBookSafe($id) {
        if (isset($this->catalog[$id]) && $this->catalog[$id]->status === 'available') {
            unset($this->catalog[$id]);
        }
    }
