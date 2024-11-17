<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pelanggan</h1>
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
                <h3 class="card-title">Update Data Pelanggan</h3>
              </div>
              <div class="card-body">
                    <?php 
                      require_once 'controllers/class_pelanggan.php';
                      $obj = new Pelanggan($dbh);
                      // panggil method tampilkan data produk
                      $rs = $obj->getAllJenis();
                      // tangkap request id, di url
                      $id = $_REQUEST['id'];
                      $data_edit = $obj->getPelanggan($id);
                    ?>
                <form action="controllers/ControllerPelanggan.php" method="POST">
                <h4>Kode</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key "></i></span>
                  </div>
                  <input id="kode" name="kode" value="<?= htmlspecialchars($data_edit['kode']); ?>" type="text" class="form-control" placeholder="C001">
                </div>

                <h4>Nama</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-archive"></i></span>
                  </div>
                  <input id="nama" name="nama" value="<?= htmlspecialchars($data_edit['nama']); ?>" type="text" class="form-control" placeholder="Ucok Baba">
                </div>

                <h4>Gender</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                  </div>
                  <input id="jk" value="<?= htmlspecialchars($data_edit['jk']); ?>" name="jk" type="text" class="form-control" placeholder="L/P">
                </div>

                <h4>Tempat Lahir</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-tags"></i></span>
                  </div>
                  <input id="tmp_lahir" value="<?= htmlspecialchars($data_edit['tmp_lahir']); ?>" name="tmp_lahir" type="text" class="form-control" placeholder="Gorontalo">
                </div>

                <h4>Tanggal Lahir</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-bars"></i></span>
                  </div>
                  <input id="tgl_lahir" value="<?= htmlspecialchars($data_edit['tgl_lahir']); ?>" name="tgl_lahir" type="text" class="form-control" placeholder="YYYY-MM-DD">
                </div>

                <h4>Email</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-minus"></i></span>
                  </div>
                  <input id="email" value="<?= htmlspecialchars($data_edit['email']); ?>" name="email" type="text" class="form-control" placeholder="Maul@gmail.com">
                </div>

                <h4>Kategori</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-clone"></i></span>
                  </div>
                  <select id="kartu_id" name="kartu_id" class="form-control">
                          <option>-- Jenis Kartu --</option>
                            <?php 
                              foreach($rs as $j){
                                 // edit jenis
                              $sel = ($data_edit['kartu_id'] == $j->id) ? "selected" : "";
                            ?> 
                            <option value="<?= $j->id ?>" <?= $sel ?> ><?= $j->nama ?></option>
                            <?php } ?>
                        </select>
                </div>
                     
                <div class="card-footer">
                  <button name="submit" type="submit" value="ubah" class="btn btn-primary">Submit</button>
                  <input type="hidden" name="idx" value="<?= $id ?>" />
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