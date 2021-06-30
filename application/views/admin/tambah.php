<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="<?=site_url('Alumni/tambahAksi')?>" method="POST">
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->