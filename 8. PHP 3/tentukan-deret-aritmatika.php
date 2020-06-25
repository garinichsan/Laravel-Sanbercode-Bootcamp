<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
	$len = count($arr);
	$cek = true;

	if (count($arr)>=2) {
		$dif = $arr[1] - $arr[0];
		for ($i=2; $i < $len ; $i++) { 
			if ($dif != $arr[$i] - $arr[$i-1]) {
				$cek = false;
				break;
				//return false;
			}
		}
	} else {
		echo "true<br>";
		//return true;
	}
	
	if ($cek) echo "true<br>"; else echo "false<br>";

}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>