<?php
function ubah_huruf($string){
//kode di sini
	for ($i=0; $i < strlen($string) ; $i++) { 
		echo chr(ord('a')+(ord($string[$i])-ord('a'))%26+1);
	}
	echo "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>