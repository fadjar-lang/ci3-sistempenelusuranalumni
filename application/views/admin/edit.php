<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"></h1>
    
    <?php foreach($alumni as $alu) : ?>
    <form action="<?php echo base_url(). 'alumni/update'; ?>" method="POST">
        <div class="form-group">
            <label>Nama</label>
            <input type="hidden" name="id_alumni" class="form-control" value="<?=$alu->id_alumni?>">
            <input type="text" class="form-control" name="nama" required value="<?=$alu->nama?>">
        </div>
        <div class="form-group">
            <label>ttl</label>
            <input type="date" class="form-control" name="tgl_lahir" value="<?=$alu->tgl_lahir?>" required>
        </div>
        <div class="form-group">
            <label>alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?=$alu->alamat?>" required>
        </div>
        <div class="form-group">
            <label>pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" value="<?=$alu->pekerjaan?>" required>
        </div>
        <div class="form-group">
            <label>nisn</label>
            <input type="text" class="form-control" name="nisn" value="<?=$alu->nisn?>" required>
        </div>
        <div class="form-group">
            <label>telepon</label>
            <input type="text" class="form-control" name="no_telp" value="<?=$alu->no_telp?>" required>
        </div>
        <div class="form-group">
            <label>gender</label>
            <input type="text" class="form-control" name="jk" value="<?=$alu->jk?>" required>
        </div>
        <div class="form-group">
            <label>jurusan</label>
            <input type="text" class="form-control" name="jurusan" value="<?=$alu->jurusan?>" required>
        </div>
        <div class="form-group">
            <label>no ijazah</label>
            <input type="text" class="form-control" name="no_ijazah" value="<?=$alu->no_ijazah?>" required>
        </div>
        <div class="form-group">
            <label>tahun masuk</label>
            <input type="text" class="form-control" name="tahun_masuk" value="<?=$alu->tahun_masuk?>" required>
        </div>
        <div class="form-group">
            <label>tahun lulus</label>
            <input type="text" class="form-control" name="tahun_lulus" value="<?=$alu->tahun_lulus?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

</form>
<?php endforeach; ?>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->