<?php
interface SearchableInterface {
    public function executeSearch(string $keyword): array;
}
class QuerySearch implements SearchableInterface {
    public function executeSearch(string $keyword): array {
        return [];
    }
}
