<?php 
# Memulakan fungsi session
session_start();

# Memanggil fail header, guard-hakim dan fungsi
include('header.php');
include('guard-hakim.php');
include('fungsi.php');

# Menyemak kewujudan data GET. Jika data GET empty, buka fail senarai-peserta
if(empty($_GET))
{ 
die("<script>window.location.href='senarai-peserta.php';</script>"); 
}

?>
<div class="w3-half w3-container">

<h3>kemaskini peserta Baru</h3>

<form action='peserta-kemaskini-proses.php?nokp_lama=<?= $_GET['nokp'] ?>' 
method='POST'>

<label class='w3-text-orange'><b>Nama Peserta</b></label>    
<input  class='w3-input w3-hover-blue w3-pale-blue w3-animate-input' style="width:70%" 
type='text' name='nama' value='<?= $_GET['nama'] ?>' required><br>

<label class='w3-text-orange'><b>Nokp Peserta</b></label>
<input  class='w3-input w3-hover-blue w3-pale-blue w3-animate-input' style="width:70%" 
type='text' name='nokp' value='<?= $_GET['nokp'] ?>' 
pattern="[0-9]{12}" oninvalid="this.setCustomValidity('Sila masukkan 12 digit nombor sahaja')" 
oninput="this.setCustomValidity('')"required><br>
    
<label class='w3-text-orange'><b>Katalaluan</b></label>
<input  class='w3-input w3-hover-blue w3-pale-blue w3-animate-input' style="width:70%" 
type='password' name='katalaluan' value='<?= $_GET['katalaluan'] ?>'  required><br>
    
<label class='w3-text-orange'><b>Sekolah</b></label>
<select class="w3-select w3-pale-blue w3-hover-blue"  name='kod_sekolah' required>
    <option value='<?= $_GET['kod_sekolah'] ?>'> 
        <?= $_GET['nama_sekolah'] ?>
    </option> 
    <?= $list=senarai_sekolah(); ?>
</select> <br>
    <br>
    <input type='submit'class="w3-button w3-khaki w3-hover-pale-green w3-round-large w3-block" style="width:50% " value='Kemaskini'>
</form>
</div>
<?php include ('footer.php'); ?>