<?php

namespace Tests;


use Classes\SequenceIterator;
use Exception;
use Helpers\TranslatorMock;
use PHPUnit\Framework\TestCase;

class SequenceIteratorTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testItCanIterateToANumber()
    {
        $translator = new TranslatorMock();
        $FizzBuzz = new SequenceIterator($translator);
        $FizzBuzz->iterate(1, 100);

        $this->assertEquals(100, $translator->getCount());
    }

    /**
     * @throws Exception
     */
    public function testItPreventsFromBeingBiggerThanUntil()
    {
        $translator = new TranslatorMock();
        $FizzBuzz = new SequenceIterator($translator);
        $FizzBuzz->iterate(100, 1);

        $this->assertEquals(0, $translator->getCount());
    }

    /**
     * @throws Exception
     */
    public function testItThrowsAnExceptionIfFromIsNegative()
    {
        $translator = new TranslatorMock();
        $FizzBuzz = new SequenceIterator($translator);
        $this->expectException(Exception::class);
        $FizzBuzz->iterate(-100, 1);
    }
    /**
     * @throws Exception
     */
    public function testItThrowsAnExceptionIfUntilIsNegative()
    {
        $translator = new TranslatorMock();
        $FizzBuzz = new SequenceIterator($translator);
        $this->expectException(Exception::class);
        $FizzBuzz->iterate(1, -100);
    }
}
