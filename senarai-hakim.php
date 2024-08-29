<?php 
# memulakan fungsi session
session_start();

# memanggil fail header, guard-hakim dan connection
include('header.php');
include('guard-hakim.php');
include('connection.php');
?>

<h3><b>Senarai hakim</b></h3>
<!-- Memanggil fail butang-saiz -->
<?php include('butang-saiz.php'); ?> 

<!-- Navigasi untuk mendaftar hakim baru -->
<a href='hakim-daftar-borang.php' class='w3-text-black w3-hover-blue'><b>[+] Daftar Hakim Baru</b></a>

<!-- Header bagi jadual untuk memaparkan senarai peserta -->
<table width='100%' border='1' id='saiz' class="w3-table-all"> 
    <tr class='w3-blue'> 
        <td>Nama</td> 
        <td>No KP</td> 
        <td>katalaluan</td> 
    </tr> 

<?php 
# arahan query untuk mencari senarai nama hakim 
$arahan_papar="Select* from hakim"; 

# laksanakan arahan mencari data hakim 
$laksana = mysqli_query($condb,$arahan_papar); 

# Mengambil data yang ditemui 
    while($data=mysqli_fetch_array($laksana)) 
    { 
        # memaparkan senarai nama dalam jadual 
        echo"<tr> 
        <td>".$data['nama_hakim']."</td> 
        <td>".$data['nokp_hakim']."</td> 
        <td>".$data['katalaluan_hakim']."</td> 
        </tr>"; 
    }

?> 
</table>
<?php include ('footer.php'); ?>