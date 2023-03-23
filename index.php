<?php
require 'function.php';

$data = query("SELECT * FROM mahasiswa");




?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container pt-5">

  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Aksi</th>
      <th scope="col">Nama</th>
      <th scope="col">Gambar</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1?>
    <?php foreach($data as $mhs):?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><button type="button" class="btn btn-primary">Ubah</button> | <button type="button" class="btn btn-danger">Hapus</button></td>
      <td><?= $mhs['nama'];?></td>
      <td><img src="img/<?= $mhs['gambar'];?>" width="40" class="rounded float-start" alt="..."></td>
      <td><?= $mhs['email'];?></td>
      <td><?= $mhs['jurusan'];?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach;?>
  </tbody>
</table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>