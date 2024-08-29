<!DOCTYPE html>
<html>
<title>Pertandingan Timbang Bola Takraw Peringkat Daerah</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="indexcss.css">
<body>
    <div class="w3-container w3-black w3-center">
        <h1>Sistem Pengurusan Pertandingan</h1>
        <h4>Pertandingan Timbang Bola Takraw Peringkat Daerah</h4>
        <h5>Anjuran PPD Simanggang</h5>
    </div>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  

<?PHP 
# Menu Hakim
if(!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "hakim")
{
    echo "
     <a class='w3-bar-item w3-button w3-grey' href='hakim-menu.php'>Menu Hakim</a>
     <a class='w3-bar-item w3-button w3-grey' href='senarai-peserta.php'>Senarai Peserta</a>
     <a class='w3-bar-item w3-button w3-grey' href='peserta-upload-borang.php'>Upload Data Peserta Baru</a>
     <a class='w3-bar-item w3-button w3-grey' href='senarai-hakim.php'>Senarai Hakim</a>
     <a class='w3-bar-item w3-button w3-grey' href='penilaian-peserta.php'>Penilaian Peserta</a>
     <a class='w3-bar-item w3-button w3-grey' href='keputusan-individu.php'>Keputusan Individu</a>
     <a class='w3-bar-item w3-button w3-grey' href='keputusan-sekolah.php'>Keputusan Sekolah</a>
     <a class='w3-bar-item w3-button w3-grey' href='logout.php'>Logout</a>
     ";
}
# Menu Peserta
else if(!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "peserta")
{
    echo "
     <a class='w3-bar-item w3-button w3-grey' href='peserta-menu.php'>Menu Peserta</a>
     <a class='w3-bar-item w3-button w3-grey' href='logout.php'>Logout</a>
     ";

} else {

    #menu Laman Utama
    echo "<a class='w3-bar-item w3-button w3-grey' href='index.php'>Laman Utama</a>";
}
?>

</div>

<div id="main">

<div class="w3-teal hide2">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  
</div>



<div class="w3-container">