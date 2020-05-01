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
        $len = strlen($str);
        $res = 0;
        for ($i = 0; $i < $len; $i++) {
            $res += $this->romanNumbersToLatin[$str[$i]];
        }
        return $res;
    }
}