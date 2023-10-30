<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Data Mahasiswa</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    form {
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      border-radius: 5px;
      padding: 20px;
      max-width: 400px;
      margin: 20px auto;
    }

    table {
      width: 100%;
    }

    tr {
      margin: 10px 0;
    }

    td {
      padding: 5px 0;
    }

    input[type="text"],
    input[type="file"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="submit"],
    input[type="reset"],
    input[type="button"] {
      background-color: #007BFF;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover,
    input[type="button"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <center>
    <h1>Input Data Mahasiswa</h1>
  </center>
  <form action="<?php echo base_url() . 'index.php/kampus/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
    <table>
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
        <td><input type="file" name="foto" value="<?php echo set_value('foto'); ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Submit"> <input type="reset" value="Reset"> <?php echo anchor('kampus/index', '<input type="button" value="Back">'); ?></td>
      </tr>
    </table>
  </form>
</body>

</html>
