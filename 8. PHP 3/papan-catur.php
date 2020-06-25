<?php

function papan_catur($angka) {
	for ($i=0; $i<$angka; $i++){
        for ($j=0; $j<$angka; $j++) { 
            if ($i%2==0)  echo "#"; else echo "&nbsp";
            if (($i%2==0) || ($j == $angka-1))  echo "&nbsp"; else echo "#";
        }
        echo "<br>";
    } 
    echo "<br>";
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
*/

echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/

?>