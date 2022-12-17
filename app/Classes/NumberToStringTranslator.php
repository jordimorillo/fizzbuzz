<?php

namespace Classes;

class NumberToStringTranslator implements Translator
{
    public function translate(int $number): string
    {
        return (string)$number;
    }
}