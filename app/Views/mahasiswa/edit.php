<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>
>>>>>>> 3f46826 (comit)
>>>>>>> d81f7ee (comit)
=======
>>>>>>> 0a3536ec322d74616c9ca3d8cac64d2f2f057474
<div class="p-4">
<form action="/update/<?= $id ?>" method="post">
    <div class="form-group">
        <label for="npm">NPM</label>
        <input type="text" name="npm" class="form-control" id="npm" value="<?= $npm?>">
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" value="<?= $nama?>">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $alamat?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<<<<<<< HEAD
<<<<<<< HEAD
</div>
=======
<<<<<<< HEAD
</div>
=======
</div>

<?= $this->endSection('content'); ?>
>>>>>>> 3f46826 (comit)
>>>>>>> d81f7ee (comit)
=======
</div>
>>>>>>> 0a3536ec322d74616c9ca3d8cac64d2f2f057474
