<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Barang</h1>
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
    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Detail Pelanggan
                </div>
                <div class="card-body pt-0">
                <?php
                  require_once 'controllers/class_Pelanggan.php';
                  $id = $_REQUEST['id'] ?? null;
                  if ($id) {
                      $obj = new Pelanggan($dbh);
                      $rs = $obj->getPelanggan($id);
                      if ($rs) { 
                          // Output the product details
                      } else {
                          echo "Product not found.";
                      }
                  } else {
                      echo "No ID provided!";
                      exit;
                  }
                ?>
                  <div class="row">
                    <div class="col-7">
                    <h2 class="lead"><b><?= htmlspecialchars($rs['nama']); ?></b></h2>
                    <p class="text-muted text-sm"><b>Kode: </b> <?= htmlspecialchars($rs['kode']); ?></p>
                    <p class="text-muted text-sm"><b>Gender: </b> <?= htmlspecialchars($rs['jk']); ?></p>
                    <p class="text-muted text-sm"><b>Tempat Lahir: <br></b> <?= htmlspecialchars($rs['tmp_lahir']); ?></p>
                    <p class="text-muted text-sm"><b>Tanggal Lahir: <br></b> <?= htmlspecialchars($rs['tgl_lahir']); ?></p>
                    <p class="text-muted text-sm"><b>Email: </b> <?= htmlspecialchars($rs['email']); ?></p>
                    <p class="text-muted text-sm"><b>Jenis Kartu: </b> <?= htmlspecialchars($rs['kategori']); ?></p> 
                    </div>
                    <div class="col-5 text-center">
                      <img src="dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    
                    <a href="pelanggan.php" class="btn btn-sm btn-primary">
                      <i class="fas fa-chevron-left"></i> Back
                    </a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
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