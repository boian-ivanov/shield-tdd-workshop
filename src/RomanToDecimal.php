<?php
namespace TDD;
class RomanToDecimal
{
    private $romanNumbersToLatin = [
        'I' => 1,
        'V' => 5,
        'X' => 10
    ];

    public function calculate($str)
    {
        $numbers = [];
        $strArray = str_split($str);
        foreach ($strArray as $value) {
            $numbers[] = $this->romanNumbersToLatin[$value];
        }

        $len = strlen($str);
        $res = 0;
        for ($i = 0; $i < $len; $i++) {
            $value = $numbers[$i];
            if (isset($numbers[$i+1]) && $value < $numbers[$i+1]) {
                $value = -1 * ($value);
            }
            $res += $value;
        }
        return $res;
    }
}