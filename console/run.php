<?php

require('vendor/autoload.php');

use Classes\Number;
use Classes\FizzBuzz;

$Number = new Number;
$FizzBuzz = new FizzBuzz($Number);
echo $FizzBuzz->make(1, 100);