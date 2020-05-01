<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TDD\RomanToDecimal;

final class RomanToDecimalTest extends TestCase
{
    public function testVisFor5()
    {
        $romanToDecimal = new RomanToDecimal();
        $this->assertSame(5, $romanToDecimal->calculate('V'));
    }
}

