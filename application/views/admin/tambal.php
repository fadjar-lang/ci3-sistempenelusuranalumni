<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="<?=site_url('lowongan/tambahAksi')?>" method="POST">
        <div class="form-group">
            <label>pabrik</label>
            <input type="text" class="form-control" name="pabrik" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" type="text" name="kriteria" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->