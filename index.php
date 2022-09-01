<?php
// echo date("l", time()-60*60*24*100)
// cri tw hri ap kta lhir
// echo date("l", mktime(0, 0, 0, 7, 29, 2022));
// cri tw detik
// echo date("l", strtotime("31 aug 2022"))

//    function salam($waktu = "来て",$nama = "シンディ
//    ")
// {
//    bhasa jepang bisa diaganti teks lain atau bahasa indonesia
//     return "いらっしゃいませ, $waktu, $nama!";
// }
// elemen pada array boleh miliki tipe data berbeda
// $hari = array("Senin","Selasa","Rabu");
// $bulan = ["Januari", "Februari","Maret"];

// cara tampilkan gunakan var_dump() atau print_r()
// var_dump($hari);
// echo "<br>" ;
// print_r($bulan);
// echo "<br>" ;
// menampilkan 1 elemen pda array
// echo "<br>" ;
// echo $bulan[1]


// menambahkn elemen baru pada array
// var_dump($hari);
// $hari[] = "Kamis";
// $hari[] = "Jumat";
// echo "<br>" ;
// var_dump($hari);
// Pengulangan pada aray = for and foreach
$angka = [3, 2, 15, 20, 11, 77, 89, 8];
?>
<!DOCTYPE html>


<head>
   <title>こんにちは</title>
   <style>
      .kotak {
         width: 50px;
         height: 50px;
         background-color: salmon;
         text-align: center;
         line-height: 50px;
         margin: 3px;
         float: left;
      }

      .clear {
         clear: both;
      }
   </style>
</head>

<body>
</body>
<!-- count($angka) buat menghitung sendiri -->
<?php for ($i = 0; $i < count($angka); $i++) { ?>
   <div class="kotak"><?php echo $angka[$i] ?></div>
<?php }  ?>


<div class="clear"></div>
<?php foreach ($angka as $a) { ?>
   <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>
<?php foreach ($angka as $a) : ?>
   <div class="kotak"><?php echo $a; ?></div>
<?php endforeach; ?>