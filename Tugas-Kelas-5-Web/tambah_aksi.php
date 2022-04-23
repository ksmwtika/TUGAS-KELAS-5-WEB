<?php
    include 'koneksi.php';
    $nama =$_POST['nama'];
    $nip =$_POST['nip'];
    $alamat =$_POST['alamat'];
    $jenis_kelamin =$_POST['jenis kelamin'];
    $tahun_masuk =$_POST['tahun masuk'];
    $agama =$_POST['agama'];
    $pendidikan_terakhir =$_POST['pendidikan terakhir'];

    mysqli_query($koneksi,"insert into data_dosen values('','$nama','$nim','$alamat','$jenis_kelamin','$tahun_masuk','$agama','$pendidikan_terakhir')");

    header("location:index.php");
?>