<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Data Mahasiswa</title>
</head>

<body>
  <center>
    <h1>Input Data Mahasiswa</h1>
  </center>
  <form action="<?php echo base_url() . 'index.php/kampus/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
    <table style="margin:20px auto;">
      <tr>
        <td>NIM</td>
        <td><input type="text" name="nim" value="<?php echo set_value('nim'); ?>">
          <?php echo form_error('nim'); ?></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" value="<?php echo set_value('nama'); ?>">
            <?php echo form_error('nama'); ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input type="text" name="alamat" value="<?php echo set_value('alamat'); ?>">
            <?php echo form_error('alamat'); ?></td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td><input type="text" name="pekerjaan" value="<?php echo set_value('pekerjaan'); ?>">
            </td>
        </tr>
        <tr>
          <td>Foto</td>
          <td><input type="file" name="foto" value="<?php echo set_value('foto'); ?>" ></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Submit"> <input type="reset" value="Reset"> <?php echo anchor('kampus/index', '<input type=button value=Back>'); ?></td>
        </tr>
    </table>
  </form>
</body>

</html>