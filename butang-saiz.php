<!-- fungsi mengubah saiz tulisan bagi kepelbagaian pengguna-->
<script>

function ubahsaiz(gandaan) {
    //mendapatkan saiz semasa tulisan pada jadual
    var saiz = document.getElementById("saiz");
    var saiz_semasa = saiz.style.fontSize || 1;

    /* menyemak jika pengguna menekan butang, nilai yang akan dihantar
        butang reset - nilai 2 dihantar   - kembali kepada saiz asal tulisan
        butang +     - nilai 1 dihantar   - besarkan saiz tulisan
        butang -     - nilai -1 dihantar  - kecilkan saiz tulisan
     */ 
    if(gandaan==2)
    {
        saiz.style.fontSize = "1em";
    } 
    else 
    {
        saiz.style.fontSize = ( parseFloat(saiz_semasa) + (gandaan * 0.2)) + "em";
    }
}
</script>


<!-- Kod untuk butang mengubah saiz tulisan -->
<h4 class='w3-text-blue hidebtn'><b>| ubah saiz tulisan |
    <input class="w3-btn w3-round-xlarge w3-pale-blue w3-hover-yellow " name='reSize1' type='button'   value='reset'          onclick="ubahsaiz(2)" />
    <input class="w3-btn w3-round-xlarge w3-pale-blue w3-hover-yellow" name='reSize'  type='button'   value='&nbsp;+&nbsp;'  onclick="ubahsaiz(1)" />
    <input class="w3-btn w3-round-xlarge w3-pale-blue w3-hover-yellow " name='reSize2' type='button'   value='&nbsp;-&nbsp;'  onclick="ubahsaiz(-1)" />
|</b></h4>