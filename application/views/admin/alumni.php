<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"></h1>
    <a href="alumni/tambah" class="btn btn-success">Tambah Data</a>
    <br>
    <br>
    <form action="<?=base_url('alumni')?>" method="post">
      <input type="text" name="keyword" autocomplte="off" autofocus>
      <input type="submit" value="cari" name="submit" class="btn btn-success">
    </form>
    <br>
      
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">ttl</th>
      <th scope="col">alamat</th>
      <th scope="col">pekerjaan</th>
      <th scope="col">nisn</th>
      <th scope="col">telepon</th>
      <th scope="col">gender</th>
      <th scope="col">jurusan</th>
      <th scope="col">no ijazah</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 1; ?>
  <?php foreach ($alumni as $alm) : ?>
    <tr>
      <th scope="row"><?=$no++?></th>
      <td><?= $alm->nama?></td>
      <td><?= $alm->tgl_lahir?></td>
      <td><?= $alm->alamat?></td>
      <td><?= $alm->pekerjaan?></td>
      <td><?= $alm->nisn?></td>
      <td><?= $alm->no_telp?></td>
      <td><?= $alm->jk?></td>
      <td><?= $alm->jurusan?></td>
      <td><?= $alm->no_ijazah?></td>
      <td><a href="<?= base_url('alumni/edit/'.$alm->id_alumni) ?>" class="btn btn-primary btn-circle"><i class="fa fa-edit"></i></a><a href="Alumni/hapus/<?=$alm->id_alumni?>" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
          <a href="<?= base_url('alumni/detail/'.$alm->id_alumni) ?>" class="btn btn-success btn-circle"><i class="fas fa-search-plus"></i></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->