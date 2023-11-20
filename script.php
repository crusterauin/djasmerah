<?php
class SoalRincian {
    private $pathGambar;
    private $teksMateri;
    private $namaMateri;
    private $jumlah_soal;
    private $soal1;
    private $soal2;
    private $soal3;
    private $jawabanBenar1;
    private $jawabanBenar2;
    private $jawabanBenar3;
    private $jawabanSalah11;
    private $jawabanSalah12;
    private $jawabanSalah13;
    private $jawabanSalah21;
    private $jawabanSalah22;
    private $jawabanSalah23;
    private $jawabanSalah31;
    private $jawabanSalah32;
    private $jawabanSalah33;
    private $nomorSoal;
    
    public function getTeksMateri() {
        return $this->teksMateri;
    }

    public function setTeksMateri($teksMateri) {
        $this->teksMateri = $teksMateri;
    }

    public function getMateri() {
        return $this->namaMateri;
    }

    public function setMateri($namaMateri) {
        $this->namaMateri = $namaMateri;
    }

    public function getJumlahSoal() {
        return $this->jumlah_soal;
    }

    public function setJumlahSoal($jumlah_soal) {
        $this->jumlah_soal = $jumlah_soal;
    }

    public function setSoal($soal1, $soal2, $soal3) {
        $this->soal1 = $soal1;
        $this->soal2 = $soal2;
        $this->soal3 = $soal3;
    }

    public function setJawabanBenar($jawabanBenar1, $jawabanBenar2, $jawabanBenar3) {
        $this->jawabanBenar1 = $jawabanBenar1;
        $this->jawabanBenar2 = $jawabanBenar2;
        $this->jawabanBenar3 = $jawabanBenar3;
    }

    public function setJawabanSalah1($jawabanSalah11, $jawabanSalah12, $jawabanSalah13) {
        $this->jawabanSalah11 = $jawabanSalah11;
        $this->jawabanSalah12 = $jawabanSalah12;
        $this->jawabanSalah13 = $jawabanSalah13;
    }
    public function setJawabanSalah2($jawabanSalah21, $jawabanSalah22, $jawabanSalah23) {
        $this->jawabanSalah21 = $jawabanSalah21;
        $this->jawabanSalah22 = $jawabanSalah22;
        $this->jawabanSalah23 = $jawabanSalah23;
    }
    public function setJawabanSalah3($jawabanSalah31, $jawabanSalah32, $jawabanSalah33) {
        $this->jawabanSalah31 = $jawabanSalah31;
        $this->jawabanSalah32 = $jawabanSalah32;
        $this->jawabanSalah33 = $jawabanSalah33;
    }

    public function setGambar($pathGambar) {
        $this->pathGambar = $pathGambar;
    }
    public function getGambar() {
        return $this->pathGambar;
    }

    public function getPertanyaanSoal($nomorSoal) {
        switch ($nomorSoal) {
            case 1:
                return $this->soal1;
            case 2:
                return $this->soal2;
            case 3:
                return $this->soal3;
            default:
                return "Pertanyaan tidak ditemukan.";
        }
    }

    public function getJawabanSoal($nomorSoal) {
        switch ($nomorSoal) {
            case 1:
                return array(
                    'benar' => $this->jawabanBenar1,
                    'salah1' => $this->jawabanSalah11,
                    'salah2' => $this->jawabanSalah12,
                    'salah3' => $this->jawabanSalah13
                );
            case 2:
                return array(
                    'benar' => $this->jawabanBenar2,
                    'salah1' => $this->jawabanSalah21,
                    'salah2' => $this->jawabanSalah22,
                    'salah3' => $this->jawabanSalah23
                    );
            case 3:
                return array(
                    'benar' => $this->jawabanBenar3,
                    'salah1' => $this->jawabanSalah31,
                    'salah2' => $this->jawabanSalah32,
                    'salah3' => $this->jawabanSalah33
                    );
            default:
                return "Jawaban tidak ditemukan.";
        }
    }
}

class MateriPilihan extends SoalRincian{
    private $namaMateri;
}

class QuizHandler {
    private $quizPilihan;
    private $soal;
    private $skor;
    private $soalAktif;
    private $jawabanBenar;

    public function __construct($quizPilihan) {
        $this->quizPilihan = $quizPilihan;
        $this->soal = isset($_GET['soal']) ? $_GET['soal'] : 1;
        $this->skor = isset($_GET['skor']) ? $_GET['skor'] : 0;
    }

    public function handleQuiz() {
        if ($this->soal <= $this->quizPilihan->getJumlahSoal()) {
            $this->soalAktif['pertanyaan'] = $this->quizPilihan->getPertanyaanSoal($this->soal);
            $this->soalAktif['jawaban'] = $this->quizPilihan->getJawabanSoal($this->soal);
            $this->jawabanBenar = isset($this->soalAktif['jawaban']['benar']) ? (array) $this->soalAktif['jawaban']['benar'] : [];
            $jawabanPengguna = isset($_GET['jawaban']) ? (array)$_GET['jawaban'] : [];
    
            if (!empty($jawabanPengguna)) {
                if (count(array_intersect($jawabanPengguna, $this->jawabanBenar)) == count($this->jawabanBenar)) {
                    $this->skor++;
                    if ($this->soal < $this->quizPilihan->getJumlahSoal()) {
                        $this->redirectToQuizPage($this->soal + 1);
                    } else {
                        $this->redirectToResultPage();
                    }
                } else {
                    if ($this->soal < $this->quizPilihan->getJumlahSoal()) {
                        $this->redirectToQuizPage($this->soal + 1);
                    } else {
                        $this->redirectToResultPage();
                    }
                }
            }
        } else {
            echo "Skor saat ini: {$this->skor}";
        }
    }

    public function getNomorSoal(){
        return $this->soal;
    }
    public function getSoalAktif(){
        return $this->soalAktif['pertanyaan'];
    }

    public function getSkor(){
        return $this->skor;
    }

    private function redirectToQuizPage($nextSoal) {
        header("Location: quiz.php?materi={$_GET['materi']}&soal={$nextSoal}&skor={$this->skor}");
        exit();
    }

    private function redirectToResultPage() {
        header("Location: nilai.php?skor={$this->skor}&materi={$_GET['materi']}");
        exit();
    }

    public function displayAnswerOptions() {
        $jawaban = $this->soalAktif['jawaban'];
        shuffle($jawaban);
    
        foreach ($jawaban as $key => $value) {
            $class = (in_array($key, $this->jawabanBenar)) ? 'benar' : '';
            echo "<button type='submit' name='jawaban' value='$value' class='$class'><p>$value</p></button>";
        }
    }    
}
?>
