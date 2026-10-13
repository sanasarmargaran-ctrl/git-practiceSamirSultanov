<?php
class User {
    public $userId;
    public $loginName;
    public function __construct($userId, $loginName) {
        $this->userId = $userId;
        $this->loginName = $loginName;
    }
}
