<?php

namespace Classes;

class Controller
{
    public static function makeFizzBuzz($from, $until)
    {
        $result = '';

        for ($current = $from; $current <= $until; $current++) {
            $result .= Number::translateToFizzBuzz($current) . "\n";
        }

        return $result;
    }
}