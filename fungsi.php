<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal nomor 3</title>
</head>
<body>
    <?php
    // membuat fungsi php
    function pdkt($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Saya kuliah di Universitas Trunojoyo Madura<br/>";
    echo "Prodi teknik informatika<br/>";
    echo "Salam Kenal<br/>";
    }

    // memanggil fungsi yang sudah dibuat sebelumnya
    pdkt("Kusuma Gigih Prakoso", "Assalamualaikum" );

    echo "<hr>";

    $saya = "Deden";
    $ucapanSalam = "Selamat pagi";
    // memanggilnya lagi
    pdkt($saya, $ucapanSalam);

    echo "<hr>";
    $friend = "Fakhri";
    // memanggil fungsinya lagi
    pdkt($friend, $ucapanSalam);
    ?>

    
</body>
</html>