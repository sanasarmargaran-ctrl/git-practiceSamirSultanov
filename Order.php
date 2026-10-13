<?php
class Order {
    public $itemsList = [];
    public function pushItem($title, $cost) {
        $this->itemsList[] = ['title' => $title, 'cost' => $cost];
    }
    public function getSummary() {
        return array_sum(array_column($this->itemsList, 'cost'));
    }
}
