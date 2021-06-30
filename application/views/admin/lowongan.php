<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
    <a href="lowongan/tambah" class="btn btn-success">Tambah Data</a>
    <br>
    <br>
      <br>
      
      <?php foreach($lowongan as $low) : ?>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?=$low->pabrik?></h5>
            <p class="card-text"><?=$low->kriteria?></p>
            <a href="lowongan/hapus/<?=$low->id?>" class="btn btn-danger">Hapus</a>
        </div>
    </div>
    <br>

    <?php endforeach; ?>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->