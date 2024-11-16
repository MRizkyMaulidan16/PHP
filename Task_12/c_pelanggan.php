<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     

    <!-- Main content -->
    <section class="content">
    <!-- Input addon -->
    
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Input Data Barang</h3>
              </div>
              <div class="card-body">
                    <?php 
                      require_once 'controllers/class_pelanggan.php';
                      $obj = new pelanggan($dbh);
                      // panggil method tampilkan data produk
                      $rs = $obj->getAllJenis();
                    ?>
                <form action="controllers/ControllerPelanggan.php" method="POST">
                <h4>Kode</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key "></i></span>
                  </div>
                  <input id="kode" name="kode" type="text" class="form-control" placeholder="C001">
                </div>

                <h4>Nama</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                  </div>
                  <input id="nama" name="nama" type="text" class="form-control" placeholder="Ucok">
                </div>

                <h4>Gender</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-transgender-alt"></i></span>
                  </div>
                  <input id="jk" name="jk" type="text" class="form-control" placeholder="L/P">
                </div>

                <h4>Tempat Lahir</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                  </div>
                  <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" placeholder="Gorontalo">
                </div>

                <h4>Tanggal Lahir</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                  </div>
                  <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control" placeholder="YYYY-MM-DD">
                </div>

                <h4>Email</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input id="email" name="email" type="text" class="form-control" placeholder="Maul@gmail.com">
                </div>

                <h4>Kategori</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-clone"></i></span>
                  </div>
                  <select id="kartu_id" name="kartu_id" class="form-control">
                          <option>-- Jenis kartu --</option>
                          <?php 
                            foreach($rs as $j){
                          ?>
                            <option value="<?= $j->id; ?>"><?= $j->nama; ?></option>
                          <?php } ?>
                        </select>
                </div>
                     
                <div class="card-footer">
                  <button name="submit" type="submit" value="simpan" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
             
               
            </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->