<?php 
# memulakan fungsi session
session_start();

# memanggil fail header, guard-hakim dan connection
include('header.php');
include('guard-hakim.php');
include('connection.php');
?>
<!-- Tajuk Laman -->
<h3><b>Senarai Peserta</b></h3>

<!-- Boarang carian nama peserta -->
<form action='' method='POST'>
    <b>Carian Peserta</b><br>
    <b>Nama Peserta</b>    <input  type='text' name='nama'>
                    <input class="w3-btn w3-round-xlarge w3-pale-green w3-hover-pale-yellow " type='submit' value='Cari'>
</form>

<!-- Header jadual bagi memaparkan senarai peserta -->
<table width='100%' border='1' class="w3-table-all"> 
    <tr class="w3-blue"> 
        <td>Nama</td> 
        <td>No KP</td> 
        <td>Sekolah</td>
        <td>Hakim Penilai</td>  
        <td>Penilaian</td> 
    </tr> 

<?php 
$tambahan="";
if(!empty($_POST['nama']))
{
    $tambahan= "where peserta.nama_peserta like '%".$_POST['nama']."%'";
}
# arahan query untuk mencari senarai nama peserta 
$arahan_papar="SELECT* FROM peserta
LEFT JOIN sekolah
ON peserta.kod_sekolah = sekolah.kod_sekolah
LEFT JOIN hakim
ON peserta.nokp_hakim = hakim.nokp_hakim
$tambahan
order by peserta.mata"; 

# laksanakan arahan mencari data peserta 
$laksana = mysqli_query($condb,$arahan_papar); 

# Mengambil data yang ditemui 
    while($m=mysqli_fetch_array($laksana)) 
    { 
        # memaparkan senarai nama dalam jadual 
        echo"<tr> 
        <td>".$m['nama_peserta']."</td> 
        <td>".$m['nokp_peserta']."</td> 
        <td>".$m['nama_sekolah']."</td> 
        <td>".$m['nama_hakim']."</td>
        <td>

        <form action='penilaian-proses.php' method='POST'>
            <input type='hidden' value='".$m['nokp_peserta']."' name='nokp'>
            <input type='text' name='mata' value='".$m['mata']."' size='5' required>
            <input type='submit' value='simpan'>
        </form>
        </td></tr>"; 
    }
?> 
</table>
<?php include ('footer.php'); ?>