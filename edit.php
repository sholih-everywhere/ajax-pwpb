<?php   

session_start();

include "config/config.php";

$id = $_GET['id'];
$hasil = query("SELECT * FROM siswa WHERE id='$id'")[0];

if (isset($_POST["submit"])) { // Ubah menjadi $_POST
    $querying = update($_POST, $id);
    if ($querying > 0) {
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tugas PWPB CRUD</title>
</head>
<body>

<div class="container pt-4">

    <h1>Edit Siswa</h1>
    <hr>
    <form method="post"> <!-- Tambahkan method="post" di sini -->
        <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $hasil['nisn']; ?>">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $hasil['nama']; ?>">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $hasil['alamat']; ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Tambahkan input hidden untuk ID -->

        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
