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

    <section class="content">
    <div class="container-fluid">
    <div align="center">
   <img src="<?php echo base_url('assets/dist')?>/img/logo.jpg" height='120 px' alt="Aisyah Adreena Furniture" class="brand-image img-circle elevation-1">
   <h1>AISYAH ADREENA FURNITURE</h1>
   <h3>No Nota: <?php echo $no_transaksi; ?></h3>
   <h5>Kasir: <b><?php echo $nama_karyawan; ?></b></h5>
   <h5>Pelanggan : <b><?php echo $pelanggan; ?></b> </h5> 
   <h5>HP/WA Pelanggan :<b> <?php echo $hp_pelanggan; ?></b></h5><br>
   <text>Pemesanan pada <b><?php echo $tanggal; ?></b></text>
   <hr>
   <style>
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
</style>

   <div class="body">
                  <div align="center">
                  <table border="0px">
                    <tr>
                        <td align="center"><b>Barang</b></td>
                        <td> </td>
                        <td> </td><td> </td><td> </td>
                        <td align="center"><b>Jumlah Pembelian</b></td>
                        <td> </td>
                        <td> </td><td> </td><td> </td>
                        <td align="center"><b>Harga Satuan</b></td>
                        
                    </tr>

                    <?php foreach($data_ip as $row) { ?>
                    <tr>
                        
                       
                        <td><?php echo $row->nama_barang; ?></td>
                        <td> </td>
                        <td> </td><td> </td><td> </td>
                        <td align="center"><?php echo $row->banyaknya; ?></td>
                        <td> </td>
                        <td> </td><td> </td><td> </td>
                        <td>Rp <?php echo number_format($row->hargasatuan,2,',','.'); ?></td>
                        <td> </td>
                        <td> </td><td> </td><td> </td>
                                                
                    </tr>
                    <?php } ?>
                  </table>
                  <table align="center">
                    <tr>
                        <td align="center">
                          Total Pembayaran <b>Rp <?php echo number_format($total,2,',','.'); ?></b>
                          <br>
                          
                      
                          <b>Terima Kasih Sudah Berbelanja Disini</b>
                        </td>
</tr>
                </table>

        </div>
        <!-- /.row -->
        <!-- Main row -->
       

              </div>
            </div>

              
               
            </div>
            <!-- /.card -->

            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

    <script type="text/javascript">
    window.print();
</script>