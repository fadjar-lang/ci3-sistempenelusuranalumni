<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"></h1>
    
    <?php foreach($alumni as $alu) : ?>
    <form action="<?php echo base_url(). 'alumni/update'; ?>" method="POST">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" required value="<?=$alu->nama?>" disabled>
        </div>
        <div class="form-group">
            <label>ttl</label>
            <input type="date" class="form-control" name="tgl_lahir" value="<?=$alu->tgl_lahir?>" disabled>
        </div>
        <div class="form-group">
            <label>alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?=$alu->alamat?>" disabled>
        </div>
        <div class="form-group">
            <label>pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" value="<?=$alu->pekerjaan?>" disabled>
        </div>
        <div class="form-group">
            <label>nisn</label>
            <input type="text" class="form-control" name="nisn" value="<?=$alu->nisn?>" disabled>
        </div>
        <div class="form-group">
            <label>telepon</label>
            <input type="text" class="form-control" name="no_telp" value="<?=$alu->no_telp?>" disabled>
        </div>
        <div class="form-group">
            <label>gender</label>
            <input type="text" class="form-control" name="jk" value="<?=$alu->jk?>" disabled>
        </div>
        <div class="form-group">
            <label>jurusan</label>
            <input type="text" class="form-control" name="jurusan" value="<?=$alu->jurusan?>" disabled>
        </div>
        <div class="form-group">
            <label>no ijazah</label>
            <input type="text" class="form-control" name="no_ijazah" value="<?=$alu->no_ijazah?>" disabled>
        </div>
        <div class="form-group">
            <label>tahun masuk</label>
            <input type="text" class="form-control" name="tahun_masuk" value="<?=$alu->tahun_masuk?>" disabled>
        </div>
        <div class="form-group">
            <label>tahun lulus</label>
            <input type="text" class="form-control" name="tahun_lulus" value="<?=$alu->tahun_lulus?>" disabled>
        </div>

</form>
<?php endforeach; ?>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->