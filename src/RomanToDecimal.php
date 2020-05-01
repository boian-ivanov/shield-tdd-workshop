<?php

namespace TDD;

class RomanToDecimal
{
    private $romanNumbersToLatin = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];

    public function calculate($str)
    {
        $numbers = $this->mapStringToValues($str);

        $len = strlen($str);
        $res = 0;
        for ($i = 0; $i < $len; $i++) {
            $value = $numbers[$i];
            if (isset($numbers[$i + 1]) && $value < $numbers[$i + 1]) {
                $value = -1 * ($value);
            }
            $res += $value;
        }
        return $res;
    }

    /**
     * @param String $str
     * @return array
     * @throws \Exception
     */
    public function mapStringToValues(string $str): array
    {
        $numbers = [];
        $strArray = str_split($str);
        foreach ($strArray as $value) {
            if (!array_key_exists($value, $this->romanNumbersToLatin)) {
                throw new \Exception('Invalid Roman numeral.');
            }
            $numbers[] = $this->romanNumbersToLatin[$value];
        }
        return $numbers;
    }
}