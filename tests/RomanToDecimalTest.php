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

    public function testIisFor1()
    {
        $romanToDecimal = new RomanToDecimal();
        $this->assertSame(1, $romanToDecimal->calculate('I'));
    }

    public function testVIisFor6()
    {
        $romanToDecimal = new RomanToDecimal();
        $this->assertSame(6, $romanToDecimal->calculate('VI'));
    }

    public function testIXis9()
    {
        $romanToDecimal = new RomanToDecimal();
        $this->assertSame(9, $romanToDecimal->calculate('IX'));
    }
}

