<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="laporan mb-2">
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.laporan -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="laporan">

        </div>
        <!-- /.laporan -->
        <!-- Main laporan -->
        <div class="laporan">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas mr-1"></i>
                  DATA BARANG
                </h3>
                <div class="card-tools">                </div>
                
              </div><!-- /.card-header -->
              <div class="card-body">
              
              <table class="table table-responsive table-striped">
             
                <tr>
                    <th>Nomor</th>
                    <th>Tahun</th>
                    <th>Januari</th>
                    <th>Februari</th>
                    <th>Maret</th>
                    <th>April</th>
                    <th>Mei</th>
                    <th>Juni</th>
                    <th>Juli</th>
                    <th>Agustus</th>
                    <th>September</th>
                    <th>Oktober</th>
                    <th>November</th>
                    <th>Desember</th>
                    
                </tr>
                <?php $no=1; foreach($laporan_transaksi  as $laporan) { ?>
                     <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?= $laporan->tahun; ?></td>
                        <td>Rp <?php echo number_format($laporan->jan,2,',','.'); ?></td>
                        <td>Rp <?php echo number_format($laporan->feb,2,',','.'); ?></td>
                        <td>Rp <?php echo number_format($laporan->mar,2,',','.'); ?></td>
                        <td>Rp <?php echo number_format($laporan->apr,2,',','.'); ?></td>
                        <td>Rp <?php echo number_format($laporan->mei,2,',','.'); ?></td>
                        <td>Rp <?php echo number_format($laporan->jun,2,',','.'); ?></td>
                        <td>Rp <?php echo number_format($laporan->jul,2,',','.'); ?></td>
                        <td>Rp <?php echo number_format($laporan->agu,2,',','.'); ?></td>
                        <td>Rp <?php echo number_format($laporan->sep,2,',','.'); ?></td>
                        <td>Rp <?php echo number_format($laporan->okt,2,',','.'); ?></td>
                        <td>Rp <?php echo number_format($laporan->nov,2,',','.'); ?></td>
                        <td>Rp <?php echo number_format($laporan->des,2,',','.'); ?></td>
                     </tr>
                     <?php } ?>
                
    </table>

              </div>
            </div>
            <!-- /.card -->
            <div class="row clearfix">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <a href="<?php echo site_url('Penjualan') ?>" class="btn btn-danger">Kembali</a>
                                
                            </div>
                        </div>
            
          </section>
          <!-- right col -->
        </div>
        <!-- /.laporan (main laporan) -->
      </div><!-- /.container-fluid -->
    </section>
                </body>
    <!-- /.content -->
    <script type="text/javascript">
    window.print();
</script>
    