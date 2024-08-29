<?php
# Memulakan fungsi SESSION
session_start();

# Memanggil fail header.php dan fail fungsi.php
include('header.php');
include('fungsi.php');
?>

<div class="w3-row w3-margin-top">
    <div class="w3-quarter w3-container">
        <h2>Pautan</h2>
        <!-- Memaparkan pautan (hyperlink) -->
        Sila Pilih <br>
        <a class="w3-btn w3-round-large w3-block w3-khaki" href='peserta-signup-borang.php'>Daftar Peserta Baharu</a> <br>
        <a class="w3-btn w3-round-large w3-block w3-khaki" href='peserta-login-borang.php'>Login Peserta</a> <br>
        <a class="w3-btn w3-round-large w3-block w3-khaki" href='hakim-login-borang.php'>Login Hakim</a> <br>
    </div>
    <div class="w3-half w3-container w3-pale-blue">
        <h2>Syarat Pertandingan</h2>
        <!-- Memaparkan Syarat-Syarat Pertandingan -->
        <hr>
        <p>Syarat Pertandingan</p>
        <li>Seorang Peserta hanya boleh menghantar 1 penyertaan sahaja</li>
        <li>Terdapat 2 kategori iaitu sekolah dan individu</li>
        <li>Bagi kategori individu, pemenang akan tempat 1 hingga 5 akan mendapat medal + sijil penghargaan</li>
        <li>semua penyertaan akan mendapat sijil penyertaan</li>
        <li>Bagi kategori sekolah, tiada had untuk pelajar menghantar penyertaan</li>
        <li>Pemenang akan dikira dari jumlah mata terkumpul pelajar-pelajar dari sekolah tersebut yang menyertai pertandingan</li>
        <li>Keputusan hanya akan dipaparkan setelah semua peserta telah dinilai</li>
        <hr>
    </div>
    <div class="w3-quarter w3-container">
        <h2>Pengumuman</h2>
        <?PHP include('marquee.php'); ?>

    </div>
</div>

<div class="w3-row">
    <div class="w3-half w3-container ">
        <h2>Keputusan individu</h2>
        <!-- Memaparkan keputusan individu -->
        <?PHP
        # Memanggil fungsi semak() dari fail fungsi.php
        $k = semak();

        # Semakan Nilai yang dipulangkan
        if ($k == "Semua peserta telah dinilai.") {
            # jika nilai dipulangkan Semua peserta telah dinilai.
            # panggi fungsi keputusan individu dari fail fungsi 
            # dan papar keputusan 5 individu terbaik. 
            # Bilangan pemenang anda boleh ubah di fail fungsi.php
            keputusan_individu();
        } else {
            # paparan jika proses penilaian masih belum tamat
            echo "<br>Proses Penilaian masih dibuat";
        }

        ?>
    </div>
    <div class="w3-half w3-container">
        <!-- Memaparkan keputusan Keseluruhan Sekolah -->
        <h2>Keputusan Sekolah</h2>
        <?PHP
        # Memanggil fungsi semak() dari fail fungsi.php
        $k = semak();
        if ($k == "Semua peserta telah dinilai.") {
            # jika nilai dipulangkan Semua peserta telah dinilai.
            # panggi fungsi keputusan sekolah dari fail fungsi 
            # dan paparkan keputusan keseluruhan sekolah
            keputusan_sekolah();
        } else {
            # paparan jika proses penilaian masih belum tamat
            echo "<br>Proses Penilaian masih dibuat";
        }
        ?>

    </div>
</div>



<hr>

<?php include('footer.php'); ?>