<?php

namespace classes;

/**
 * Class Number
 * @package Classes
 */
class Number
{
    /**
     * @param int $int
     *
     * @return string
     */
    public static function translateToFizzBuzz(int $int): string
    {
        $output = '';

        if ($int % 3 === 0 || preg_match('/[3]/', $int) === 1) {
            $output .= 'Fizz';
        }

        if ($int % 5 === 0 || preg_match('/[5]/', $int) === 1) {
            $output .= 'Buzz';
        }

        return (!empty($output)) ? $output : (string)$int;
    }
}