<?php  

    include "koneksi.php";

    if(isset($_POST['tambah'])) {
        $nama_buah = $_POST['nama_buah'];
        $harga_buah = $_POST['harga_buah'];
        
        $kueri = mysqli_query($conn, "INSERT INTO buah VALUES(NULL, '$nama_buah', $harga_buah)");
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Tambah Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <br>
        <h1 class="text-center">Tambah Data</h1>
        <br>

        <form action="" method="POST">

            <div class="form-group">
              <label for="nama_buah">Nama Buah</label>
              <input type="text" class="form-control" name="nama_buah" id="nama_buah" placeholder="nama buah...">

            <br>

              <label for="harga_buah">Harga Buah</label>
              <input type="number" class="form-control" name="harga_buah" id="harga_buah" placeholder="harga buah...">
            </div>

            <input type="submit" class="btn btn-success" name="tambah" value="Tambah Data">
            <a href="index.php" class="btn btn-danger">Batal</a>

        </form>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>