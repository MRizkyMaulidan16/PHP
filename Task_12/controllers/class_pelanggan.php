<?php 
    class Pelanggan{
        // class_barang.php
        private $dbh;
        public function __construct($dbh){
            $this->dbh = $dbh;
        }

        public function dataPelanggan(){
            $sql="SELECT * FROM pelanggan";
            $rs = $this->dbh->query($sql);
            return $rs;
        }
        
        public function getAllJenis(){
            $sql = "SELECT * FROM kartu";
            // fungsi query, eksekusi query dan ambil datanya
            $rs = $this->dbh->query($sql); 
            return $rs;
        }

        public function simpan($data){
            $sql = "INSERT INTO pelanggan(kode,nama,jk,tmp_lahir,tgl_lahir,email,kartu_id)
                    VALUES (?,?,?,?,?,?,?)";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($data);
        }

        //Mengambil Barang
        public function getPelanggan($id) {
            $sql = "SELECT pelanggan.*, kartu.nama AS kategori 
                    FROM pelanggan 
                    INNER JOIN kartu ON kartu.id = pelanggan.kartu_id 
                    WHERE pelanggan.id = ?";
            
            $ps = $this->dbh->prepare($sql); 
            $ps->execute([$id]);
            $rs = $ps->fetch(PDO::FETCH_ASSOC); // Use FETCH_ASSOC for array
            return $rs;
        }
    }

?>