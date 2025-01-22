<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];


$gambar_produk = $_FILES['gambar_produk']['name'];
$nama_foto = $_FILES['foto']['tmp_name'];

#3. menulis query
$simpan = "INSERT INTO produk (id_produk,nama_produk,harga,kategori,gambar_produk) VALUES ('$id_produk','$nama_produk',
'$harga','$kategori','$gambar_produk')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

$upload_foto = move_uploaded_file($nama_foto,"foto/$gambar_produk");


#5. mengalihkan halaman
 header("location:index.php");
?>
<script>
    document.location="index.php";
</script>