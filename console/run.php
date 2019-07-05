<?php

require('vendor/autoload.php');

use Classes\Number;
use Classes\Controller;

$Controller = new Controller;
$Number = new Number;

echo $Controller->makeFizzBuzz(1, 100, $Number);