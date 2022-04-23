<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>CRUD DATA DOSEN</h2>
    <br/>
    <a href="tambah.php">+ TAMBAH DOSEN</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tahun Masuk</th>
            <th>Agama</th>
            <th>Pendidikan Terakhir</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from data_dosen");
        while($d = mysqli_fetch_array($data))
        {
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $d['nama'];?></td>
                <td><?php echo $d['nip'];?></td>
                <td><?php echo $d['alamat'];?></td>
                <td><?php echo $d['jenis kelamin'];?></td>
                <td><?php echo $d['tahun masuk'];?></td>
                <td><?php echo $d['agama'];?></td>
                <td><?php echo $d['pendidikan terakhir'];?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['Id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['Id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

</body>
</html>