<?php

namespace Helpers;

use Classes\Translator;

class TranslatorMock implements Translator
{
    private $count = 0;

    public function translate(int $number): string
    {
        $this->count++;
        return '';
    }

    public function getCount(): int
    {
        return $this->count;
    }
}