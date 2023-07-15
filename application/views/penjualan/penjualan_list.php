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
        
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-shopping-cart mr-1"></i>
                  DATA PENJUALAN
                </h3>
                <div class="card-tools">
                <a class="btn btn-primary" href="<?php echo site_url('Penjualan/tambah_penjualan') ?>"><i class="fas fa-plus mr-1"></i>Tambah</a>
                </div>
                
              </div><!-- /.card-header -->
              <div class="card-body">
              
              <table Class="table table-bordered table-striped" id="tabeltransaksi">
                <thead>
                <tr>
                    <td>Nomor Nota</td>
                    <td>Tanggal</td>
                    <td>Total Harga</td>
                    <td>Kasir</td>
                    <td>Aksi</td>
                </tr>
</thead>
<tbody>
        <?php foreach($data_transaksi as $row) { ?>
                     <tr>
                        <td><?php echo $row->no_transaksi; ?></td>
                        <td><?php echo $row->tanggal; ?></td>
                        <td>Rp <?php echo number_format($row->total,2,',','.'); ?></td>
                        
                        <td><?php echo $row->nama_karyawan; ?></td>
                        <td class="text-nowrap">
                           <a href="<?php echo site_url('Penjualan/ubah_penjualan/'. $row->no_transaksi) ?>" class="btn btn-sm btn-warning"> 
                              <i class='fas fa-edit mr-1'></i>Ubah</a>
                           <a href="<?php echo site_url('Penjualan/hapus_penjualan/'. $row->no_transaksi) ?>" class="btn btn-sm btn-danger"> 
                              <i class='fas fa-trash mr-1'></i>Hapus</a>
                              <a href="<?php echo site_url('Itempenjualan/tambah_ip/'. $row->no_transaksi) ?>" class="btn btn-sm btn-primary"> 
                              <i class='fas fa-shopping-cart mr-1'></i>Tambah Pesanan</a> 
                           <a href="<?php echo site_url('Penjualan/cetak_ip/'. $row->no_transaksi) ?>" class="btn btn-sm btn-success"> 
                              <i class='fas fa-print mr-1'></i>Cetak</a>   
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
      $('#tabeltransaksi').DataTable();
   })
</script> 