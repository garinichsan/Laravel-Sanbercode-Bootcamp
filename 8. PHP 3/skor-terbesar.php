<?php
function skor_terbesar($arr){
//kode di sini
  $result = [];
  foreach ($arr as $val) {
    if (!array_key_exists($val['kelas'], $result)) {
      $result[$val['kelas']] = ['nama' => $val['nama'], 'kelas' => $val['kelas'], 'nilai' => $val['nilai']];
    } else {
      if ($result[$val['kelas']]['nilai'] < $val['nilai']) {
        $result[$val['kelas']] = ['nama' => $val['nama'], 'kelas' => $val['kelas'], 'nilai' => $val['nilai']];
      }
    }
  }
  echo "<pre>";
  print_r($result);
  echo "</pre>";
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>