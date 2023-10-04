<?php

include('config.php');

$nama_lengkap = $_POST['nama_lengkap'];
$username     = $_POST['username'];
$password     = MD5($_POST['password']);

//query insert data ke dalam database
$query = "INSERT INTO tbl_users (nama_lengkap, username, password) VALUES ('$nama_lengkap', '$username', '$password')";        

if($conn->query($query)) {
    
    echo "success";

} else {
    
    echo "error";

}