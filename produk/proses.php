<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];


$gambar_produk = $_FILES['gambar_produk']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];

#3. menulis query
$simpan = "INSERT INTO produk (id,nama,harga,kategori,foto) VALUES ('$id','$nama',
'$harga','$kategori','$gambar_produk')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

$upload_foto = move_uploaded_file($tmp_foto,"foto/$gambar_produk");


#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>