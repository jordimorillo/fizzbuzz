<?php

namespace Classes;

interface Translator
{
    public function translate(int $number): string;
}