#!/usr/bin/env php
<?php

require(dirname(__DIR__) . '/vendor/autoload.php');

use Classes\NumberToFizzBuzzTranslator;
use Classes\NumberToStringTranslator;
use Classes\SequenceIterator;

try {
    $FizzBuzz = new SequenceIterator(new NumberToFizzBuzzTranslator());
    echo $FizzBuzz->iterate(1, 100);
    $FizzBuzz = new SequenceIterator(new NumberToStringTranslator());
    echo $FizzBuzz->iterate(1, 100);
} catch (Exception $e) {
    echo $e;
}

