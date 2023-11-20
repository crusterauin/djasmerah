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
    
    public function getAllProperties() {
        return [
            'pathGambar' => $this->pathGambar,
            'teksMateri' => $this->teksMateri,
            'namaMateri' => $this->namaMateri,
            'jumlah_soal' => $this->jumlah_soal,
            'soal1' => $this->soal1,
            'soal2' => $this->soal2,
            'soal3' => $this->soal3,
            'jawabanBenar1' => $this->jawabanBenar1,
            'jawabanBenar2' => $this->jawabanBenar2,
            'jawabanBenar3' => $this->jawabanBenar3,
            'jawabanSalah11' => $this->jawabanSalah11,
            'jawabanSalah12' => $this->jawabanSalah12,
            'jawabanSalah13' => $this->jawabanSalah13,
            'jawabanSalah21' => $this->jawabanSalah21,
            'jawabanSalah22' => $this->jawabanSalah22,
            'jawabanSalah23' => $this->jawabanSalah23,
            'jawabanSalah31' => $this->jawabanSalah31,
            'jawabanSalah32' => $this->jawabanSalah32,
            'jawabanSalah33' => $this->jawabanSalah33,
            'nomorSoal' => $this->nomorSoal,
        ];
    }
    public function getMateri() {
        return $this->teksMateri;
    }

    public function setMateri($teksMateri) {
        $this->teksMateri = $teksMateri;
    }

    public function getNamaMateri() {
        return $this->namaMateri;
    }

    public function setNamaMateri($namaMateri) {
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



class MateriHandler extends SoalRincian {
    private $belanda;
    private $pemuda;
    private $jepang;
    private $rengasdengklok;
    private $proklamasi;
    private $ppki;
    private $ditii;
    private $g30spki;
    private $konflik98;

    private $daftarMateri = [];

    // Fungsi untuk menambahkan materi ke dalam daftar
    public function tambahMateri($materi) {
        $this->daftarMateri[] = $materi;
    }

    public function getMateriDariDaftar($namaMateri) {
        foreach ($this->daftarMateri as $materi) {
            if ($materi->getNamaMateri() === $namaMateri) {
                return $materi;
            }
        }
        return null; // Return null jika materi tidak ditemukan
    }

    public function getMateriPilihan() {
        if (isset($_GET['materi'])) {
            $materi = $_GET['materi'];
            $materiPilihan = null;

            switch ($materi) {
                case 'belanda':
                    $materiPilihan = $this->belanda;
                    break;
                case 'pemuda':
                    $materiPilihan = $this->pemuda;
                    break;
                case 'jepang':
                    $materiPilihan = $this->jepang;
                    break;
                case 'rengasdengklok':
                    $materiPilihan = $this->rengasdengklok;
                    break;
                case 'proklamasi':
                    $materiPilihan = $this->proklamasi;
                    break;
                case 'ppki':
                    $materiPilihan = $this->ppki;
                    break;
                case 'ditii':
                    $materiPilihan = $this->ditii;
                    break;
                case 'g30spki':
                    $materiPilihan = $this->g30spki;
                    break;
                case 'konflik98':
                    $materiPilihan = $this->konflik98;
                    break;
                default:
                    echo "Materi tidak valid!";
                    exit();
            }

            return $materiPilihan;
        } else {
            echo "Parameter materi tidak ditemukan!";
            exit();
        }
    }
}

?>

$materi = $_GET['materi'];
$materiPilihan = ${$materi};

$materi->setMateri($_GET['materi']);
$materiPilihan = ${$_GET['materi']};

$materi->setMateri($_GET['materi']);
$materiPilihan = ${materi}
var_dump($materiPilihan->getNamaMateri());