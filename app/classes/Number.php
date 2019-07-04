<?php

namespace classes;

/**
 * Class Number
 * @package Classes
 */
class Number
{
    /**
     * @param $number
     *
     * @return bool
     */
    public static function isFizz($number) : bool
    {
        if($number%3 === 0 || preg_match('/[3]/', $number) === 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $number
     *
     * @return bool
     */
    public static function isBuzz($number) : bool
    {
        if($number%5 === 0 || preg_match('/[5]/', $number) === 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param int $int
     *
     * @return string
     */
    public static function translateToFizzBuzz(int $int) : string
    {
        $output = '';

        if(self::isFizz($int)) {
            $output = 'Fizz';
        }

        if(self::isBuzz($int)) {
            $output .= 'Buzz';
        }

        return (!empty($output)) ? $output : (string) $int;
    }
}