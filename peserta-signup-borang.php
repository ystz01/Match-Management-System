<?php
# Memulakan fungsi session
session_start();

#memanggil fail header.php fungsi.php
include('header.php');
include('fungsi.php');
?>


<div class="w3-row w3-margin-top">
    <div class="w3-quarter w3-container">
        <!-- Tajuk antaramuka -->
        <h3>Pendaftaran Peserta Baru</h3>

        <!-- Borang Pendaftaran Peserta baru -->
        <form action='peserta-signup-proses.php' method='POST'>

            <label class='w3-text-orange'><b>Nama Peserta</b></label>
            <input class='w3-input w3-hover-blue w3-pale-blue w3-animate-input' style="width:70%" type='text' name='nama' 
            placeholder="Nama Penuh Anda" required><br>
            <label class='w3-text-orange'><b>Nokp Peserta</b></label>
            <input class='w3-input w3-hover-blue w3-pale-blue w3-animate-input' style="width:70%" type='text' name='nokp' 
            placeholder="cth:051221070169"  
            pattern="[0-9]{12}" oninvalid="this.setCustomValidity('Sila masukkan 12 digit nombor sahaja')" 
            oninput="this.setCustomValidity('')" required><br>
            <label class='w3-text-orange'><b>Katalaluan</b></label>
            <input class='w3-input w3-hover-blue w3-pale-blue w3-animate-input' style="width:70%" type='password' name='katalaluan' 
             required><br>
            <label class='w3-text-orange'><b>Sekolah</b></label>
            <select class="w3-select w3-border w3-pale-blue" name='kod_sekolah' required><br>

                <option selected value disabled>Pilih</option>
                <!-- Mengambil senarai sekolah dari fail fungsi.php -->
                <?= $list = senarai_sekolah(); ?>

            </select>

            <input class="w3-button w3-khaki w3-hover-pale-green w3-round-large w3-block" type='submit' value='Daftar'>

        </form>
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

<?php include('footer.php'); ?>