<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="alert alert-warning">Selamat datang!</div>
    <div class="container">
        <div class="fluit-in">
            <div class="card">
                <div class="card-header">
                    <div class="card-tittle">
                    <h3>halaman tampil biodata</h3>
                </div>
                <?php
                if (isset($_GET['pesam'])){
                    $pesan = $_GET['pesan'];
                    if($pesan == "input"){
                        echo "data berhasil di input.";
                    }else if($pesan == "update"){
                        echo "data berhasil di update.";
                    }else if($pesan == "hapus"){
                        echo "data berhasil dihapus.";
                    }
                }
                ?>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <h4><button class="btn btn-primary btn-sm">New</button></h4>
                            </tr>
                            <tr>
                                <th>NO</th>
                                <th>NIM</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>GENDER</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include "koneksi_db.php";
                                $query_mysql = mysqli_query($koneksi,"SELECT*FROM testing") or die (mysql_error());
                                $nomor =1;
                                while ($data = mysqli_fetch_array($query_mysql)) {
                                     ?>
                                     <tr>
                                        <td><?= $nomor++ ?></td>
                                        <td><?= $data['NIM'] ?></td>
                                        <td><?= $data['NAMA'] ?></td>
                                        <td><?= $data['Alamat'] ?></td>
                                        <td><?= $data['Jenkel'] ?></td>
                                        <td>
                                        <button class="btn btn-success btn-sm">EDIT</button>
                                        <button class="btn btn-danger btn-sm">DELETE</button>
                                        </td>
                                     </tr>



<?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>