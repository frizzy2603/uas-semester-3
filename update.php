<?php
 require "config.php";

 $idBuku = $_GET['id'];
 $buku = get("SELECT * FROM perpustakaan WHERE id = $idBuku ");

 $buku = $buku[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1 class="ms-3">edit Data Buku</h1>
    <form action="./proses/edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $idBuku ?>">
        <div class="form-group mt-2 ms-3">
            <label for="Judul">Judul Buku</label>
            <input type="text" name="Judul" id="myInput" class="form-control" value="<?php echo $buku['Judul']?>">
        </div>
        <div class="form-group mt-2 ms-3">
            <label for="Penulis">Penulis Buku</label>
            <input type="text" name="Penulis" id="myInput" class="form-control" value="<?php echo $buku['Penulis']  ?>" >
        </div>
        <button type="submit" class="btn btn-info text-light mt-2 ms-3">Simpan Perubahan </button>
        <!-- <button type="reset" onclick="document.getElementById('myInput').value = 'Reset'" class="btn btn-danger text-light mt-2 ms-3">Clear Form</button> -->
    </form>
    <div class="container">

    </div>
</body>
</html>