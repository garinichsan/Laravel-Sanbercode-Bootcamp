Algoritma program
1. input array
2. get the country
3. if there is no country in the new array then add the country
4. add the medal count

<?php
/**
 * CONTOH: 
 * perolehan_medali(
 *  array(
 *    array('Indonesia', 'emas'), 
 *    array('India', 'perak'), 
 *    array('Korea Selatan', 'emas' ), 
 *    array('India', 'perak'), 
 *    array('India', 'emas'), 
 *    array('Indonesia', 'perak'), 
 *    array('Indonesia', 'emas'), 
 *  )
 * );
 * 
 * output: 
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1 
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2 
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0 
 *      [perunggu] => 0
 *    )
 * )
 * 
 * 
 */

function perolehan_medali($arr){
  // Kode kamu di sini
  $hasil = [];
  foreach ($arr as list($country, $medal)) {
    $cek = false;

    foreach ($hasil as &$val) {
      if ($val['negara'] == $country){
        $cek = true;
        $val[$medal]++;
      }
    }

    if (!$cek) {
      $hasil[] = [ 'negara' => $country,
                    'emas' => 0,
                    'perak' => 0,
                    'perunggu' => 0,
                    $medal => 1
                  ];
    }

  }
  if (empty($hasil)) {
    echo "no data <br>"; 
    // return 0;
  } else 
  return $hasil;
}


 // TEST CASES
echo "<br> <pre>";
 print_r (perolehan_medali(
   array(
    array('Indonesia', 'emas'), 
    array('India', 'perak'), 
    array('Korea Selatan', 'emas' ), 
    array('India', 'perak'), 
    array('India', 'emas'), 
    array('Indonesia', 'perak'), 
    array('Indonesia', 'emas') 
   )
  ));
echo "</pre>";
/**
 * output: 
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1 
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2 
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0 
 *      [perunggu] => 0
 *    )
 * )
 */

 print_r(perolehan_medali([])); // no data
?>