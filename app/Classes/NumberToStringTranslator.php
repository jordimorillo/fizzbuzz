<?php

namespace Classes;

/**
 * Class Number
 * @package Classes
 */
class NumberToStringTranslator implements Translator
{
    /**
     * @param int $number
     *
     * @return string
     */
    public function translate(int $number): string
    {
        return (string)$number;
    }
}