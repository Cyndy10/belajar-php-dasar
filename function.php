<?php
$mahasiswa = [
    ["シンディ", "ブーンガン情報工学", "外観", "cindi@gmail.com"],
    ["リサール", "コンピューターエンジニア", "私の恋人", "ijal@gmail.com"],
    ["リサール", "コンピューターエンジニア", "バックエンド", "ijal@gmail.com"]

];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>私のデータ</title>
</head>
<body>
    <h1>私のデータ</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>名前 :<?= $mhs[0]; ?></li>
    <li>選考科目 :<?= $mhs[1]; ?></li>
    <li>どの部分 :<?= $mhs[2]; ?></li>
    <li>Eメール :<?= $mhs[3]; ?></li>
</ul>

<?php endforeach; ?>







</body>
</html>