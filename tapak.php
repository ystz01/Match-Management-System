<!DOCTYPE html>
<html>
<title>Pertandingan Timbang Bola Takraw Peringkat Daerah</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
    <div class="w3-container w3-black w3-center">
        <h1>Pertandingan Timbang Bola Takraw Peringkat Daerah</h1>
    </div>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  

<?PHP 
# Menu Hakim
if(!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "hakim")
{
    echo "
     <a class='w3-bar-item w3-button w3-pink' href='hakim-menu.php'>Menu Hakim</a>
     <a class='w3-bar-item w3-button w3-pink' href='senarai-peserta.php'>Senarai Peserta</a>
     <a class='w3-bar-item w3-button w3-pink' href='peserta-upload-borang.php'>Upload Data Peserta Baru</a>
     <a class='w3-bar-item w3-button w3-pink' href='senarai-hakim.php'>Senarai Hakim</a>
     <a class='w3-bar-item w3-button w3-pink' href='penilaian-peserta.php'>Penilaian Peserta</a>
     <a class='w3-bar-item w3-button w3-pink' href='keputusan-individu.php'>Keputusan Invividu</a>
     <a class='w3-bar-item w3-button w3-pink' href='keputusan-sekolah.php'>Keputusan Sekolah</a>
     <a class='w3-bar-item w3-button w3-pink' href='logout.php'>Logout</a>
     ";
}
# Menu Peserta
else if(!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "peserta")
{
    echo "
    | <a class='w3-bar-item w3-button w3-pink' href='peserta-menu.php'>Menu Peserta</a>
    | <a class='w3-bar-item w3-button w3-pink' href='logout.php'>Logout</a>
     ";

} else {

    #menu Laman Utama
    echo "<a class='w3-bar-item w3-button w3-pink' href='index.php'>Laman Utama</a>";
}
?>

</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  
</div>



<div class="w3-container">
isi kandungan

</div>

<div class="w3-container w3-black">
    <h5>Hakcipta &copy 2021-2022 : PPD Simanggang</h5>
</div>
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>
