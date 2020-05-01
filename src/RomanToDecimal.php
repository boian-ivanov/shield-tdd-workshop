<?php
namespace TDD;
class RomanToDecimal
{
    private $romanNumbersToLatin = [
        'I' => 1,
        'V' => 5
    ];
    public function calculate($str)
    {
        return $this->romanNumbersToLatin[$str];
    }
}