<?php

namespace Classes;

/**
 * Class Number
 * @package Classes
 */
class NumberToFizzBuzzTranslator implements Translator
{
    /**
     * @param int $number
     *
     * @return string
     */
    public function translate(int $number): string
    {
        $result = '';

        if ($number % 3 === 0 || preg_match('/[3]/', $number) === 1) {
            $result .= 'Fizz';
        }

        if ($number % 5 === 0 || preg_match('/[5]/', $number) === 1) {
            $result .= 'Buzz';
        }

        return empty($result) ? (string)$number: $result;
    }
}