<?php

session_start();

include 'config/config.php';

$query = "SELECT * FROM siswa";
$hasil = query($query);
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

    <title>Tugas PWPB CRUD</title>
</head>
<body>

<div class="container pt-4">

    <div class="d-flex justify-content-between">
        <div><h1>Daftar Siswa</h1></div>

        <div><a href="tambah.php" class="btn btn-primary">Tambah Siswa</a></div>
        <div><a href="logout.php" class="btn btn-primary">Logout</a></div>
    </div>
    <hr>

    <table class="table">
        <thead>
        <tr class="table-primary">
            <th scope="col">NISN</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Perubahan</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($hasil as $item) { ?>
            <tr class="table-dark">
                <th scope="row"><?php echo $item["nisn"]; ?></th>
                <td><?php echo $item["nama"]; ?></td>
                <td><?php echo $item["alamat"]; ?></td>
                <td>
                    <a href="delete.php?id=<?php echo $item['id']; ?>">Delete</a> |
                    <a href="edit.php?id=<?php echo $item['id']  ?>">Update</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
-->

</body>
</html>
