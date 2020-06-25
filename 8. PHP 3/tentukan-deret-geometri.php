<?php
function tentukan_deret_geometri($arr) {
// kode di sini
	$len = count($arr);
	$cek = true;
	
	if (count($arr)>=2) {
		$ratio = $arr[1] / $arr[0];
		for ($i=2; $i < $len ; $i++) { 
			if ($ratio != $arr[$i] / $arr[$i-1]) {
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
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>