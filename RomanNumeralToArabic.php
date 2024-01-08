<?php
function RomanNumeralValues() {
    return [
        'I'=>1,
        'V'=>5,
        'X'=>10,
        'L'=>50,
        'C'=>100,
        'D'=>500,
        'M'=>1000,
    ];
}

 /*   $numbertoromans = array(
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    );
*/
function ConvertRomanNumeralToArabic($input_roman){
    $input_length = strlen($input_roman);
    if($input_length === 0) {
        return $result;
    }
    
    $roman_numerals = RomanNumeralValues();
    
    $current_pointer = 1;
    $result = 0;
    
    for($i = $input_length - 1; $i > -1; $i--){ 
        $letter = $input_roman[$i];
        $letter_value = $roman_numerals[$letter];
        
        if($letter_value === $current_pointer) {
            $result += $letter_value;
        } elseif ($letter_value < $current_pointer) {
            $result -= $letter_value;
        } else {
            $result += $letter_value;
            $current_pointer = $letter_value;
        }
    }
    
    return $result;
}

print ConvertRomanNumeralToArabic("LIX");

?>



