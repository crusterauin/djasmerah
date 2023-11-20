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
    <link rel="stylesheet" href="materi.css">
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
    <div class="main">
        <div class="materi">
            <p class="judulMateri">
                <?php
                echo $materiPilihan->getMateri();
                ?>
            </p>
            <div class="kotakLogo">
                <img class="logoMateri"src="<?php echo $materiPilihan->getGambar();?>" alt="Logo VOC">
            </div>
            <div class="paragraf">
                <?php
                echo $materiPilihan->getTeksMateri();
                ?>
            </div>  
        </div>
        <div class="lanjut">
            <p class="sudahPaham">
                Sudah paham? Uji pengetahuanmu!
            </p>
            <a class="lanjutQuiz" href="rincianQuiz.php?materi=<?php echo $materi->getMateri();?>">
                <p>Lanjut ke Quiz</p>
            </a>
        </div>
        <div class="oleh">
            <p>Oleh Faturrohman Fairuz Zaki dan Firdy Dwi Aryani</p>
        </div>
    </div>
</body>
</html>