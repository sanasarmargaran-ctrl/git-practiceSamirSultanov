<?php
require_once 'Calculator.php';
$calc = new Calculator();
echo $calc->sum(20, 30) . "\n";
echo $calc->div(15, 0) . "\n";
