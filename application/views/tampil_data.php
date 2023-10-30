<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampil Data</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    table {
      margin: 20px auto;
      border-collapse: collapse;
      width: 90%;
      max-width: 800px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      border-radius: 5px;
    }

    th, td {
      padding: 10px;
      text-align: center;
    }

    th {
      background-color: #333;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #ccc;
      transition: background-color 0.3s;
    }

    img {
      max-width: 50px;
      max-height: 50px;
      border-radius: 50%;
    }

    a {
      text-decoration: none;
      color: #007BFF;
      font-weight: bold;
      transition: color 0.3s;
    }

    a:hover {
      color: #0056b3;
    }

    input[type="button"] {
      background-color: #007BFF;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    input[type="button"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <center><h1>Data Mahasiswa</h1></center>
  <table>
    <tr>
      <th>No</th>
      <th>Nim</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Pekerjaan</th>
      <th>Foto</th>
      <th>Action</th>
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
      <td> <img src="<?= base_url(); ?><?= $u->foto ?>" width="50" height="50" alt=""> </td>
      <td>
            <?= anchor('kampus/edit/'.$u->id,'Edit | '); ?>
            <a class="fas fa-delete" href="<?= base_url('kampus/hapus/'.$u->id); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a>
      </td>
    </tr>  
    <?php } ?>
  </table>
  <center><?= anchor('kampus/tambah','<input type="button" value="Tambah Data">');?></center>
</body>
</html>
