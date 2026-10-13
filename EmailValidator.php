<?php
function checkEmailFormat($address) {
    return (bool)filter_var($address, FILTER_VALIDATE_EMAIL);
}
