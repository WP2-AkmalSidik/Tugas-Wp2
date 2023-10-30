<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
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

        img {
            max-width: 90px;
            max-height: 110px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px;
            margin-right: 10px;
        }

        input[type="submit"],
        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover,
        button:hover {
            background-color: #0056b3;
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
    </style>
</head>

<body>
    <center>
        <h1>Edit Data Mahasiswa</h1>
    </center>
    <form action="<?= base_url('kampus/edit_aksi'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mahasiswa->id; ?>">
        <table>
            <tr>
                <td>Nim</td>
                <td><input type="text" name="nim" value="<?= $mahasiswa->nim; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?= $mahasiswa->nama; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?= $mahasiswa->alamat; ?>"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" value="<?= $mahasiswa->pekerjaan; ?>"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>
                    <img src="<?php echo base_url(); ?><?php echo $mahasiswa->foto; ?>" width="90" height="110">
                    <input type="file" name="new_photo">
                    <input type="hidden" name="old_photo" value="<?php echo $mahasiswa->foto; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan">
                    <a href="<?= base_url('kampus/index'); ?>"><button type="button">Kembali</button></a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>