<?php
// $mahasiswa = [
// ["Синди", "информатика нонган", "Тампилан", "cindi@gmail.com","08123456789"],
// ["ижал", "Техник информатики", "внешний интерфейс", "ijal@gmail.com","08123456789"],
// ["リサール", "コンピューターエンジニア", "バックエンド", "ijal@gmail.com"]
// array associative
// definisinya sama seperti array numerik,kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "cindi",
        "номор" => "08123456789",
        "Эл. адрес" => "cindi@gmail.com",
        "кейлиан" => "информатика нонган",
        "gambar" => "marsha.png",

    ],
    [
        "nama" => "ijal",
        "номор" => "08123456789",
        "Эл. адрес" => "ijal@gmail.com",
        "кейлиан" => "Техник информатики",
        "gambar" => "marsha.png"

    ]
];
// echo $mahasiswa[1]["tugas"][1];


// ];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>список студентов</title>
</head>

<body>
    <h1>список студентов</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>имя :<?php echo $mhs["nama"]; ?></li>
            <li>джурусан :<?php echo $mhs["номор"]; ?></li>
            <li>кейлиан :<?php echo $mhs["Эл. адрес"]; ?></li>
            <li>Эл. адрес :<?php echo $mhs["кейлиан"]; ?></li>

        </ul>

    <?php endforeach; ?>


</body>

</html>