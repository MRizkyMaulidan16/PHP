<?php 
    
    require_once '../models/koneksi.php';
    require_once 'class_pelanggan.php';

    // tangkap request element form
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $email = $_POST['email'];
    $kartu_id = $_POST['kartu_id'];
    $tombol = $_POST['submit'];

    // Menyimpan data diatas ke sebuah array
    $data = [
        $kode,      // ? 1 
        $nama,      // ? 2
        $jk,   // ? 3
        $tmp_lahir,     // ? 4
        $tgl_lahir,      // ? 5
        $email,   // ? 6
        $kartu_id       // ? 7
    ];

    // proses
    $obj = new Pelanggan($dbh);
    // $obj->simpan($data);
    switch ($tombol) {
        case 'simpan';
            $obj->simpan($data);
            break;
        case 'ubah';
            $data[] = $_POST['idx']; //tangkap hidden field u/ ? ke-8
            $obj->ubah($data);
            break;
        case 'hapus';
        $id[] = $_POST['idx']; //tangkap ke-1 where id=?
        $obj->hapus($id);
        break;  
        default://tombol batal
        header('Location:http://localhost/LatihanPHP/Tugas/CRUD/pelanggan.php');
            break;
    }

    // Landing Page
    header('Location:http://localhost/LatihanPHP/Tugas/CRUD/Pelanggan.php');
?>