<?php
#1. koneksi ke database
include("../koneksi.php");

#2. ambil id yang akan disunting
$id = $_GET['id'];

#3. mengambil semua record data berdasarkan id yang dipilih
$ambil = "SELECT * FROM kategori WHERE id_='$id'";

#4. menjalankan query
$edit = mysqli_query($koneksi,$ambil);

#5. memisahkan record data berdasarkan kolom/field
$data = mysqli_fetch_array($edit)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kategori</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
<?php 
    include_once('../navbar.php');
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Form Edit Data Kategori</h3>
                
            </div>
            <div class="card-body">
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?=$data['id_kategori']?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID</label>
                    <input type="text" value="<?=$data['id_kategori']?>" name="id_kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Kategori</label>
                    <select name="jabatan" class="form-control" id="">
                        <option value="">-Pilih Kategori-</option>
                        <option <?php echo ($data['kategori'] == "kayu") ? 'selected' : '' ?> value="kayu">kayu</option>
                        <option <?php echo ($data['kategori'] == "besi") ? 'selected' : '' ?> value="besi">besi</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>