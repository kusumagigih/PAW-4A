<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal Nomor 2</title>
</head>
<body>
    <h3>Nama : <?php echo "Kusuma Gigih Prakoso";?><h3> <!--//disini termasuk php didalam html. Echo untuk menampilkan teks ke layar. -->
    <h3>Nim : <?php echo "180411100082";?><h3>
    <?php
    $num1 = 8; //membuat variabel pertama
    $num2 = 7; //membuat variabel kedua
    $num3 = 6; //membuat variabel ketiga

    $hasil1=$num1 +$num2 +$num3; //menambah variabel baru untuk melihat hasil dari operasi 3 variabel pertama 
    $hasil2=$num1 +$num2 -$num3;
    $hasil3=$num1 *$num2 /$num3;

    echo"Hasil Operasi Matematika yang Pertama adalah $hasil1 <br>"; //menampilkan hasil operasi matematika ke layar
    echo"Hasil Operasi Matematika yang Kedua adalah $hasil2 <br>";
    echo"Hasil Operasi Matematika yang Ketiga adalah $hasil3 <br>";
    ?>
</body>
</html>