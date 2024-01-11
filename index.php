<?php
 require "./config.php";

 $dataBuku = get("SELECT * FROM perpustakaan");

 if (isset($_GET['keyword'])) {
     $keyword = $_GET['keyword'];
     $dataBuku = get("SELECT * FROM perpustakaan WHERE Judul LIKE '%$keyword%'");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Data Buku</h1>
        <a href="Tambah.php" class="btn btn-info text-light mt-3 ">Tambah Buku</a>
        <a href="keluar.php" class="btn btn-danger text-light mt-3 ">keluar</a>
        <form method="GET" class="mt-3">
            <div class="form-group">
                <label for="keyword"> SEARCH </label>
                <input type="text" name="keyword" id="keyword" placeholder="cari nama buku" class="form-control">
            </div>
            <button class="bt btn-info" type="submit"> cari</button>
        </form>
        <table class="table table-bordered table-info mt-2">
            <thead>
                <th class="text-center">Judul</th>
                <th class="text-center" > Penulis</th>
                <th class="text-center"> Action </th>
            </thead>
            <tbody class="table-light">
                <?php foreach($dataBuku as $buku): ?>
                <tr>
                    <td class="text-center"> <?php echo $buku['Judul'] ?> </td>
                    <td class="text-center"> <?php echo $buku['Penulis'] ?> </td>
                    <td>
                        <a href="update.php?id=<?php echo $buku['id'] ?>" class="btn btn-success"> Edit </a>
                        <a href="delete.php?id=<?php echo $buku['id'] ?>" class="btn btn-danger" onclick=" return confirm('Apakah ingin menghapus data ini')">  Hapus </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


</body>
</html>