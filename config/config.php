<?php 

$host = "localhost";
$password = "";
$user = "root";
$db = "datasiswa";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    echo "Koneksi Ke Database Gagal";
}

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Error: " . mysqli_error($conn));
    }

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

function tambah($data) {
    global $conn;

    $nis = $data['nisn'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];

    $query = "INSERT INTO siswa (nisn, nama, alamat) VALUES ('$nis', '$nama', '$alamat')";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    return 1;
}

function delete($id){
    global $conn;

    $query = "DELETE FROM siswa WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    return 1;
}


function update($data, $id) {
    global $conn;

    $nis = $data['nisn'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];

    $query = "UPDATE siswa SET nisn = '$nis', nama = '$nama', alamat = '$alamat' WHERE id = '$id'";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    return 1;
}



?>