<?php
function verifyAge($userAge) {
    $userAge = (int)$userAge;
    if ($userAge > 110 || $userAge < 0) return false;
    return $userAge >= 18;
}
