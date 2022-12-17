#!/usr/bin/env php
<?php

require(dirname(__DIR__) . '/vendor/autoload.php');

use Classes\NumberToFizzBuzzTranslator;
use Classes\NumberToStringTranslator;
use Classes\SequenceIterator;

try {
    $fiz6zBuzz = new SequenceIterator(new NumberToFizzBuzzTranslator());
    echo $fizzBuzz->iterate(1, 100);
    $fizzBuzz = new SequenceIterator(new NumberToStringTranslator());
    echo $fizzBuzz->iterate(1, 100);
} catch (Exception $e) {
    echo $e;
}

