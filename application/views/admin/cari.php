<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"></h1>
    <a href="alumni/tambah" class="btn btn-success">Tambah Data</a>
    <br>
    <br>
    <form action="Alumni/cari" method="GET" class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
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
      <th scope="col">tahun masuk</th>
      <th scope="col">tahun lulus</th>
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
      <td><?= $alm->tahun_masuk?></td>
      <td><?= $alm->tahun_lulus?></td>
      <td><a href="<?= site_url('alumni/edit/'.$alm->id_alumni) ?>"><i class="fa fa-edit"></i></a> <a href="Alumni/hapus/<?=$alm->id_alumni?>"><i class="fa fa-trash-alt"></i></a> <br><a href=""><i class="fa fa-info"></i></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->