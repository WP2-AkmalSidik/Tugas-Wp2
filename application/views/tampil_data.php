<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampil Data</title>
</head>
<body>
  <center><h1>Data Mahasiswa</h1></center>
  <table style="margin:20px auto;" border="1">
    <tr>
      <td>No</td>
      <td>Nim</td>
      <td>Nama</td>
      <td>Alamat</td>
      <td>Pekerjaan</td>
      <td>Action</td>
    </tr>

    <?php
    $no = 1;
    foreach($mahasiswa as $u){
    ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $u->nim ?></td>
      <td><?= $u->nama ?></td>
      <td><?= $u->alamat ?></td>
      <td><?= $u->pekerjaan ?></td>
      <td>
            <?= anchor('kampus/edit/'.$u->id,'Edit | '); ?>
            <a class="fas fa-delete" href="<?= base_url('kampus/hapus/'.$u->id); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a>
      </td>
    </tr>  
    <?php } ?>
  </table>
  <center><?= anchor('kampus/tambah','<input type=button value=\'Tambah Data\'>');?></center>
</body>
</html>