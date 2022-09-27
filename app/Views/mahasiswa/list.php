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
<a href="/create" type="button" class="btn btn-primary mb-3">Tambah</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NPM</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>      
      <th scope="col">Cretaed at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $no = 1;
        foreach ($mahasiswa as $mhs) :
    ?>
    <tr>
      <th scope="row"><?=$no?></th>
      <td><?=$mhs['npm']?></td>
      <td><?=$mhs['nama']?></td>
      <td><?=$mhs['alamat']?></td>
      <td><?=$mhs['created_at']?></td>
      <td>
      <div class="d-flex">
        <a class="btn btn-warning mr-3" href="/edit/<?= $mhs['id'] ?>">Edit</a>                    
        <form action="/delete/<?= $mhs['id'] ?>" method="post">
          <input type="hidden" name="_methode" value="DELETE">
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
      </td>
    </tr>
    <?php $no++; endforeach; ?>
  </tbody>
</table>
<<<<<<< HEAD
<<<<<<< HEAD
</div class="p-4">
=======
<<<<<<< HEAD
</div class="p-4">
=======
</div class="p-4">

<?= $this->endSection('content'); ?>
>>>>>>> 3f46826 (comit)
>>>>>>> d81f7ee (comit)
=======
</div class="p-4">
>>>>>>> 0a3536ec322d74616c9ca3d8cac64d2f2f057474
