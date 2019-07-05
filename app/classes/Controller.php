<?php

namespace Classes;

class Controller
{
    public function makeFizzBuzz($from, $until, Number $Number)
    {
        $result = '';

        for ($current = $from; $current <= $until; $current++) {
            $result .= $Number->translateToFizzBuzz($current) . "\n";
        }

        return $result;
    }
}