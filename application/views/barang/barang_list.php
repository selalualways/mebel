<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  DATA BARANG
                </h3>
                <div class="card-tools">
                <a class="btn btn-primary" href="<?php echo site_url('Barang/tambah_barang') ?>"><i class="fas fa-plus mr-1"></i>Tambah</a>
                </div>
                
              </div><!-- /.card-header -->
              <div class="card-body">
              
              <table class="table table-bordered table-striped" id="tabelbarang">
              <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Kode Barang</th>
                    <th>Kategori</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stock</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($data_barang as $row) { ?>
                     <tr>
                        <td><?php echo $row->id_barang; ?></td>
                        <td><?php echo $row->kode_barang; ?></td>
                        <td><?php echo $row->nama_kategori; ?></td>
                        <td><?php echo $row->nama_barang; ?></td>
                        <td>Rp <?php echo number_format($row->harga,2,',','.'); ?></td>
                        <td><?php echo $row->stock; ?></td>
                        <td class="text-nowrap">
                           <a href="<?php echo site_url('Barang/ubah_barang/'. $row->id_barang) ?>" class="btn btn-sm btn-warning"> 
                              <i class='fas fa-edit mr-1'></i>Ubah</a>
                           <a href="<?php echo site_url('Barang/hapus_barang/'. $row->id_barang) ?>" class="btn btn-sm btn-danger"> 
                              <i class='fas fa-trash mr-1'></i>Hapus</a>
                        </td>
                     </tr>
                     <?php } ?>
                </tbody>
    </table>

              </div>
            </div>
            <!-- /.card -->

            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
                </body>
    <!-- /.content -->
    <script>
   document.addEventListener('DOMContentLoaded', function(){
      $('#tabelbarang').DataTable();
   })
</script>