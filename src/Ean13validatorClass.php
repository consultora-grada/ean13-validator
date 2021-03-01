<?php

namespace Grada\Ean13validator;

class Ean13validatorClass
{
    public function validate_EAN13Barcode(string $barcode)
    {
        if (! preg_match("/^[0-9]{13}$/", $barcode)) {
            return false;
        }
    
        $digits = $barcode;
    
        $even_sum = intval($digits[1]) + intval($digits[3]) + intval($digits[5]) +
        intval($digits[7]) + intval($digits[9]) + intval($digits[11]);
    
        $even_sum_three = $even_sum * 3;
    
        $odd_sum = intval($digits[0]) + intval($digits[2]) + intval($digits[4]) +
        intval($digits[6]) + intval($digits[8]) + intval($digits[10]);
    
        $total_sum = $even_sum_three + $odd_sum;
    
        $next_ten = (ceil($total_sum / 10)) * 10;
        $check_digit = $next_ten - $total_sum;
    
        if ($check_digit == intval($digits[12])) {
            return true;
        }
    
        return false;
    }
}
