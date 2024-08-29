<?php 
# memulakan fungsi session
session_start();

# Memanggil fail header, guard-hakim, connection dan fungsi
include('header.php');
include('guard-hakim.php');
include('connection.php');
include ('fungsi.php');
?>
<link rel="stylesheet" href="print.css">
<h3><b>Senarai Peserta</b></h3>

<!-- Memanggil fail butang-saiz -->
<?php include('butang-saiz.php'); ?> 

<!-- Header jadual keputusan -->
<table width='100%' border='1' id='saiz' class="w3-table-all"> 
<caption><?= $k=semak(); ?></caption>
    <tr class="w3-blue"> 
        <td>Kedudukan</td>
        <td>Sekolah</td> 
        <td>Mata</td> 
    </tr> 
    <input class="w3-btn w3-round-xlarge w3-pale-blue w3-hover-yellow" name='print'type='button'onclick="window.print()" id="print"  value='Cetak'/> 

<?php 
# arahan query untuk mencari jumlah mata terkumpul bg setiap sekolah
$arahan_papar="SELECT sekolah.nama_sekolah, SUM(peserta.mata) AS jumlah
FROM peserta
JOIN sekolah
ON peserta.kod_sekolah = sekolah.kod_sekolah
GROUP BY peserta.kod_sekolah
order by jumlah DESC "; 

# laksanakan arahan mencari  
$laksana = mysqli_query($condb,$arahan_papar); 
$bil=0;

    # Mengambil data yang ditemui 
    while($m=mysqli_fetch_array($laksana)) 
    { 
        # memaparkan senarai nama sekolah dalam jadual 
        echo"<tr> 
               <td>".++$bil."</td>
               <td>".$m['nama_sekolah']."</td> 
               <td>".$m['jumlah']."</td> 
             </tr> "; 
    }
?> 
</table>
<?php include ('footer.php'); ?>