<?php

require('vendor/autoload.php');

use Classes\Number;

for($i=1; $i<=100; $i++) {
    echo Number::translateToFizzBuzz($i)."\n";
}