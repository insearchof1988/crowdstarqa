<?php

require_once(__DIR__.'/../lib/calculator.php');

$calculator = new calculator();
echo $calculator->evaluate('1 + 1'); // Should output 2
echo $calculator->evaluate('5 - 1'); // Should output 4
