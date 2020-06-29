Algoritma Program
1. Input String
2. Get String's length
3. Do read character until there is a symbol
4. Store the first number and the operator to a variable
5. Do read character until end of string
6. Store the second number in a variable
7. operate those number using the operator


<?php
  function hitung($string_data)
  {
    // Kode kalian di sini
    $first = ''; 
    $ope = '';
    $second = '';
    $len = strlen($string_data);
    $i=0; 

    while ($ope == '') { 
      if ($string_data[$i] == '*' || $string_data[$i] == ':' || $string_data[$i] == '+' || $string_data[$i] == '-' || $string_data[$i] == '%') $ope = $string_data[$i];
      else { $first .= $string_data[$i]; }
      $i++;
    }
    while ( $i < $len ){
      $second .= $string_data[$i];
      $i++;
    }

    switch ($ope) {
      case '*':
        return (int) $first * (int) $second;
      case ':':
        return (int) $first / (int) $second;
      case '+':
        return (int) $first + (int) $second;
      case '-':
        return (int) $first - (int) $second;
      case '%':
        return (int) $first % (int) $second;
    }
  }

  // TEST CASES
  echo "<br>";
  echo hitung("102*2"); //204
  echo "<br>";
  echo hitung("2+3"); //5
  echo "<br>";
  echo hitung("100:25"); //4
  echo "<br>";
  echo hitung("10%2"); //0
  echo "<br>";
  echo hitung("99-2"); //97
echo "<br>";?>
