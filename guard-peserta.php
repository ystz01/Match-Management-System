<?php
# Menyemak nilai pembolehubah session['tahap']
if($_SESSION['tahap'] != "peserta")
{
    # jika nilainya tidak sama dengan peserta. aturcara akan dihentikan
    die("<script>alert('sila login'); 
    window.location.href='logout.php';</script>");
}
?>