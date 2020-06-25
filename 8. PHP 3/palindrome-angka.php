<?php

function reverseString($name) {
    $reversed = '';
    for ($i=strlen($name)-1 ; $i >= 0 ; $i--) { 
        $reversed .= $name[$i];
    }
    return $reversed;
 } 


function palindrome ($word){
    if ($word == reverseString($word)) {
        return true;
    } else {
        return false;
    }
}

function palindrome_angka($angka) {
  // tulis kode di sini
	$cek = false;
	while (!$cek) {
		$angka++;
		$word = strval($angka);
		if (palindrome($word)) {
			echo "$angka <br>";
			$cek = true;
			//return $angka;
		}
	}

}




// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>