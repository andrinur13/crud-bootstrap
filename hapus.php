<?php  

    $id = $_GET['id'];
    
    include "koneksi.php";

    $kueri_hapus = mysqli_query($conn, "DELETE FROM buah WHERE id = '$id' ");

    header("Location:index.php");

?>