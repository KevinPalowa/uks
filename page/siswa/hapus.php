<?php
$conn = mysqli_connect('localhost', 'root', '', 'uks');;
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM siswa WHERE no_rfid = '$id' ");
if (mysqli_affected_rows($conn) == 1) {
    echo "<script>window.location.href ='?page=siswa';</script>";
}else {
    echo mysqli_error($conn);
}
