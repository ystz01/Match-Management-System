<?php
# Memulakan fungsi session
session_start();

# memanggil fail header.php dan guard-hakim
include('header.php');
include('guard-hakim.php');
?>

<!-- Tajuk antaramuka -->
<h3>Pendaftaran Hakim Baru</h3>

<!-- borang pendaftaran hakim baru-->
<form action='hakim-daftar-proses.php' method='POST'>

  <label class='w3-text-orange'><b>Nama hakim</b></label> 
  <input type='text' class='w3-input w3-hover-blue w3-pale-blue w3-animate-input' style="width:20%" name='nama' 
  placeholder="Nama Hakim" required><br>
  <label class='w3-text-orange'><b>Nokp hakim</b></label> 
  <input type='text' class='w3-input w3-hover-blue w3-pale-blue w3-animate-input' style="width:20%" name='nokp' 
  placeholder="cth:200130278901" pattern="[0-9]{12}" oninvalid="this.setCustomValidity('Sila masukkan 12 digit nombor sahaja')" 
  oninput="this.setCustomValidity('')" required><br>
  <label class='w3-text-orange'><b>Katalaluan</b></label>
  <input type='password' class='w3-input w3-hover-blue w3-pale-blue w3-animate-input' style="width:20%" 
  name='katalaluan' required><br>
  <input type='submit' class="w3-button w3-khaki w3-hover-pale-green w3-round-large " value='Simpan'>

</form>

<?php include('footer.php'); ?>