<?php

namespace Classes;


/**
 * Class Number
 * @package Classes
 */
interface Translator
{
    /**
     * @param int $number
     *
     * @return string
     */
    public function translate(int $number): string;
}