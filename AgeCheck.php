<?php
function verifyAge($userAge) {
    $userAge = (int)$userAge;
    if ($userAge > 110) return false;
    return $userAge <= 18;
}
// step 5
// step 6
// step 7
