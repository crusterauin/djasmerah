<?php

include_once('classes.php');

$materi->setMateri($_GET['materi']);
$materiPilihan = ${$_GET['materi']};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rincianQuiz.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quando&display=swap" rel="stylesheet">
    <title>DjasMerah</title>
</head>
<body>
    <nav>
        <div class="navbar">
            <a class="logoJudul" href=beranda.php>
                <img class="logo" src="aset/logoDjasMerah.png" alt="Logo DjasMerah">
                <p class="judul">DjasMerah</p>
            </a>
        </div>
    </nav>
    <p class="judulQuiz">Quiz Sejarah</p>
    <div class="rincian">
        <p>Rincian Quiz sebagai berikut :</p>
        <table>
            <tr>
                <th>Materi</th>
                <td><?php echo $materiPilihan->getMateri();?></td>
            </tr>
            <tr>
                <th>Jumlah Soal</th>
                <td><?php echo $materiPilihan->getJumlahSoal();?></td>
            </tr>
        </table>
        <p>Kerjakan dengan serius, jujur, dan tepat waktu!</p>
    </div>
    <div class="siap">
        <p>Sudah siap?</p>
        <a href="quiz.php?materi=<?php echo $materi->getMateri();?>">
            <p>Mulai Quiz</p>
        </a>
    </div>
    <div class="oleh">
        <p>Oleh Faturrohman Fairuz Zaki dan Firdy Dwi Aryani</p>
    </div>
</body>
</html>