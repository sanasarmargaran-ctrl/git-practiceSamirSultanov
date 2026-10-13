<?php
class QuerySearch {
    public function execute($needle, array $haystack) {
        return array_filter($haystack, fn($entry) => mb_stripos($entry, $needle) !== false);
    }
}
