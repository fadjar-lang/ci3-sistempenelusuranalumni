<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Tambah Data</h1>
    <div class="container">
    <form action="<?=site_url('Tambah/tambahAksi')?>" method="POST">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="form-group">
            <label>ttl</label>
            <input type="date" class="form-control" name="tgl_lahir" required>
        </div>
        <div class="form-group">
            <label>alamat</label>
            <input type="text" class="form-control" name="alamat" required>
        </div>
        <div class="form-group">
            <label>pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" required>
        </div>
        <div class="form-group">
            <label>nisn</label>
            <input type="text" class="form-control" name="nisn" required>
        </div>
        <div class="form-group">
            <label>telepon</label>
            <input type="text" class="form-control" name="no_telp" required>
        </div>
        <div class="form-group">
            <label>gender</label>
            <input type="text" class="form-control" name="jk" required>
        </div>
        <div class="form-group">
            <label>jurusan</label>
            <input type="text" class="form-control" name="jurusan" required>
        </div>
        <div class="form-group">
            <label>no ijazah</label>
            <input type="text" class="form-control" name="no_ijazah" required>
        </div>
        <div class="form-group">
            <label>tahun masuk</label>
            <input type="text" class="form-control" name="tahun_masuk" required>
        </div>
        <div class="form-group">
            <label>tahun lulus</label>
            <input type="text" class="form-control" name="tahun_lulus" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>