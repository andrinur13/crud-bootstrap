<?php  

    include "koneksi.php";


    $id_buah = $_GET['id'];
    $syntax_edit = "SELECT * FROM buah WHERE id = '$id_buah'";
    $kueri_buah = mysqli_query($conn, $syntax_edit);

    $tampungdatabuah = [];

    while($row = mysqli_fetch_assoc($kueri_buah)) {
        $tampungdatabuah[] = $row;
    }

    if(isset($_POST['perbarui'])) {
        $id = $_POST['id'];
        $nama_buah = $_POST['nama_buah'];
        $harga_buah = $_POST['harga_buah'];

        $syntax_masuk = "UPDATE buah SET id='$id', nama_buah = '$nama_buah', harga_buah = '$harga_buah' WHERE id = '$id'";

        $kueri_edit = mysqli_query($conn, $syntax_masuk);

        //Redirect ke index.php
        header("Location:index.php");
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <br>
    <div class="container">
        <h1 class="text-center">Edit Data</h1>
    </div>

    <br>

    <div class="container">
        
        <form action="" method="POST">

            <?php foreach($tampungdatabuah as $buah) : ?>

            <div class="form-group">
              <label for="id">ID Buah</label>
              <input type="text" class="form-control" name="id" id="id" value="<?=$buah['id']; ?>" readonly>

                <br>

              <label for="nama_buah">Nama Buah</label>
              <input type="text" class="form-control" name="nama_buah" id="nama_buah" value="<?=$buah['nama_buah']; ?>" placeholder="nama buah...">

              <br>

              <label for="harga_buah">Harga Buah</label>
              <input type="text" class="form-control" name="harga_buah" id="harga_buah" value="<?=$buah['harga_buah']; ?>">
            </div>

            <?php endforeach; ?>

            <input type="submit" class="btn btn-primary" name="perbarui" value="Perbarui Data">

        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>