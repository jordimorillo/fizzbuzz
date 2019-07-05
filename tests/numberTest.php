<?php

use Classes\Number;
use PHPUnit\Framework\TestCase;

class numberTest extends TestCase
{
    public function testNumberIsFizz()
    {
        $Number = new Number;
        $this->assertSame('Fizz', $Number->translateToFizzBuzz(3));
    }

    public function testNumberIsBuzz()
    {
        $Number = new Number;
        $this->assertSame('Buzz', $Number->translateToFizzBuzz(5));
    }

    public function testNumberIsFizzBuzz()
    {
        $Number = new Number;
        $this->assertSame('FizzBuzz', $Number->translateToFizzBuzz(15));
    }

    public function testNumberIsNumberFour()
    {
        $Number = new Number;
        $this->assertSame('4', $Number->translateToFizzBuzz(4));
    }

    public function testIfANumberNotMultipleOfThreeWithAThreeInItIsFizz()
    {
        $Number = new Number;
        $this->assertSame('Fizz', $Number->translateToFizzBuzz(31));
    }

    public function testIfANumberNotMultipleOfFiveWithAFiveInItIsBuzz()
    {
        $Number = new Number;
        $this->assertSame('Buzz', $Number->translateToFizzBuzz(52));
    }
}