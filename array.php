<?php
// $hari = array("Senin", "Selasa", "Rabu");
// $bulan = ["Januari", "Februari", "Maret"];
// $arr = [100, "teks", true];
// // menampilkan array
// // versi debugging
// var_dump($hari);
// echo "<br>";
// <?php foreach ($angka as $a) : ?>
<!-- saya hapus endeach nya krna gak bisa dijadikan komentar jadi kalian bisa tambahkan sndiri -->
        <!-- <div class="kotak"><?php echo $a; ?></div> -->
    <!-- <?php ; ?> -->
<!-- // print_r($bulan);
// echo $arr[0]; -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>こんにちは</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: blueviolet;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear: both;
        }

    </style>
</head>

<body>
    <?php
    // bisa kita menampilkan array dalam array kayak dibawah ini ingat index 1 dimulai dari angka 0
    $angka = [
   [1, 0, 9], 
    [2, 0, 0], 
    [5]
    ];
    ?>
    <!-- // disini kalian bisa export sendiri terserah jadi saya akan jadikan komentar untuk langkah slanjutnya
    // echo $angka[2][2]; -->
    
    <?php foreach ($angka as $a) : ?>
    <?php foreach ($a as $b) : ?>

        <div class="kotak"><?php echo $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
    <?php endforeach; ?>
    <!-- ini adlh pengulangan array bersarang -->

    
</body>

</html>
