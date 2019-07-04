<?php

use Classes\Number;
use PHPUnit\Framework\TestCase;

class numberTest extends TestCase
{
    public function testNumberIsFizz() {
        $this->assertSame('Fizz', Number::translateToFizzBuzz(3));
    }

    public function testNumberIsBuzz() {
        $this->assertSame('Buzz', Number::translateToFizzBuzz(5));
    }

    public function testNumberIsFizzBuzz() {
        $this->assertSame('FizzBuzz', Number::translateToFizzBuzz(15));
    }

    public function testNumberIsNumberFour() {
        $this->assertSame('4', Number::translateToFizzBuzz(4));
    }

    public function testIfANumberNotMultipleOfThreeWithAThreeInItIsFizz() {
        $this->assertSame('Fizz', Number::translateToFizzBuzz(31));
    }

    public function testIfANumberNotMultipleOfFiveWithAFiveInItIsBuzz() {
        $this->assertSame('Buzz', Number::translateToFizzBuzz(52));
    }
}