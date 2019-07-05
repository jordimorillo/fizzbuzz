<?php

namespace Classes;

class FizzBuzz extends Number
{
    public $Number;

    public function __construct(Number $Number) {
        $this->Number = $Number;
    }
    public function make($from, $until)
    {
        $result = '';

        for ($current = $from; $current <= $until; $current++) {
            $result .= $this->Number->translateToFizzBuzz($current) . "\n";
        }

        return $result;
    }
}