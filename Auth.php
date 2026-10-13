<?php
class Auth {
    public function authenticate($login, $password) {
        return ($login === 'root' && $password === 'pass123');
    }
}
