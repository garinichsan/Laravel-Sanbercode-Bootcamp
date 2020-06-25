<?php
function pasangan_terbesar($angka){
// kode di sini
	$huruf = strval($angka);
	$len = strlen($huruf);
	if ($len%2==1) {
		$huruf = "0$huruf";
		$len++;
	}

	$awal = substr($huruf, 0,2);
	for ($i=1; $i < $len ; $i++) { 
		$akhir = substr($huruf, $i,2);
		if ($awal < $akhir ) $awal = $akhir;
	}

	echo $awal . "<br>";
	//return (int)$awal;
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>