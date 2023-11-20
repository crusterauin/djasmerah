<?php
include_once('classes.php');

$materi->setMateri($_GET['materi']);
$materiPilihan = ${$_GET['materi']};
$quiz->handleQuiz();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quiz.css">
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
    <div class="soal">
        <h1>Soal <?php echo $quiz->getNomorSoal(); ?></h1>
        <p><?php echo $quiz->getSoalAktif(); ?></p>
    </div>
    <div class="containerPilGan">
        <form action="quiz.php" method="get">
            <input type="hidden" name="materi" value="<?php echo $materi->getMateri(); ?>">
            <input type="hidden" name="soal" value="<?php echo $quiz->getNomorSoal(); ?>">
            <input type="hidden" name="skor" value="<?php echo $quiz->getSkor(); ?>">
            <div class="mainPilGan">
                <?php
                    $quiz->displayAnswerOptions();
                ?>
            </div>
        </form>
    </div>
    <div class="oleh">
        <p>Oleh Faturrohman Fairuz Zaki dan Firdy Dwi Aryani</p>
    </div>
</body>
</html>