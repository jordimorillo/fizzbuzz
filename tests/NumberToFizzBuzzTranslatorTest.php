<?php

use Classes\NumberToFizzBuzzTranslator;
use PHPUnit\Framework\TestCase;

class numberToFizzBuzzTranslatorTest extends TestCase
{
    public function testNumberIsFizz()
    {
        $Number = new NumberToFizzBuzzTranslator();
        $this->assertSame('Fizz', $Number->translate(3));
    }

    public function testNumberIsBuzz()
    {
        $Number = new NumberToFizzBuzzTranslator();
        $this->assertSame('Buzz', $Number->translate(5));
    }

    public function testNumberIsFizzBuzz()
    {
        $Number = new NumberToFizzBuzzTranslator();
        $this->assertSame('FizzBuzz', $Number->translate(15));
    }

    public function testNumberIsNumberFour()
    {
        $Number = new NumberToFizzBuzzTranslator();
        $this->assertSame('4', $Number->translate(4));
    }

    public function testIfANumberNotMultipleOfThreeWithAThreeInItIsFizz()
    {
        $Number = new NumberToFizzBuzzTranslator();
        $this->assertSame('Fizz', $Number->translate(31));
    }

    public function testIfANumberNotMultipleOfFiveWithAFiveInItIsBuzz()
    {
        $Number = new NumberToFizzBuzzTranslator();
        $this->assertSame('Buzz', $Number->translate(52));
    }
}