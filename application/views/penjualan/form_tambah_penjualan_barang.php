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
              <h2 align="center"><?php echo $judul ?></h2>
                <div class="card-tools">
                
                </div>
              </div><!-- /.card-header -->
              
              <div class="card-body">
              
              <table Class="table table-bordered">
                
                <tr>
                    <td align="center">No</td>
                    <td align="center">Barang</td>
                    <td align="center">Quantity</td>
                    <td align="center">Harga Satuan</td>
                    <td align="center">Aksi</td>
                </tr>



<?php foreach($data_item_transaksi as $row) { ?>
                     <tr>
                        <td align="center"><?php echo $row->no_transaksi; ?></td>
                        <td><?php echo $row->nama_barang; ?></td>
                        <td align="center"><?php echo $row->banyaknya; ?></td>
                        <td>Rp <?php echo number_format($row->hargasatuan,2,',','.'); ?></td>
            <td>
            <a href="<?php echo site_url('Itempenjualan/hapus_ip/'. $row->id_barang.'/'.$row->no_transaksi) ?>" class="btn btn-sm btn-danger"> 
                              <i class='fas fa-trash mr-1'></i>Hapus</a>
            </td>
            </tr>
            <?php } ?>




            <?php echo form_open($action, 'method="POST"')?>
  <tr>
    
    <td><input type="hidden" value="<?= $no_transaksi; ?>" name="no_transaksi" id="no_transaksi" class="form-control" ></td>
    <td>
    <select class="form-control show-tick" name="id_barang" id="id_barang">
                                        <?php
                                        foreach($data_barang as $barang){ ?>
                                            <option value='<?php echo $barang->id_barang ?>' <?php if($barang->id_barang == $id_barang) { echo "selected"; } ?>>
                                                <?php echo $barang ->nama_barang ?>
                                            </option>
                                        <?php } ?>
                                    </select></td>
    <td><input type="number" name="banyaknya" id="banyaknya" class="form-control" placeholder="Jumlah Pembelian"></td>
    <input type="hidden" name="stock" id="stock" class="form-control" placeholder="Stock">
    <td><input type="number" readonly name="hargasatuan" id="hargasatuan" class="form-control" placeholder="Harga Barang"></td>

    <td><button type="submit" class="btn btn-primary">Simpan</button></td>              
  </tr>  
                  </form>         
                </table>

              </div>
            </div>
            <div class="row clearfix">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <a href="<?php echo site_url('Penjualan') ?>" class="btn btn-danger">Kembali</a>
                                
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