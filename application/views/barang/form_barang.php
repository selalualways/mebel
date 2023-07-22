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
      <div class="block-header">
            
      </div>
      
      <h2 align="center"><?php echo $judul ?></h2>
                  <div class="body">
                    <?php echo form_open($action, 'class="form-horizontal"') ?>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="id_barang"></label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                <div class="form-line">
                                        <input type="hidden" name="id_barang" class="form-control" placeholder="Masukkan ID Barang"
                                        value="<?php echo $id_barang ?>">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="kode_barang">Kode Barang</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                <div class="form-line">
                                        <input type="text" name="kode_barang" class="form-control" placeholder="Masukkan Kode Barang"
                                        value="<?php echo $kode_barang ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="id_kategori">Kategori</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                <select class="form-control show-tick" name="id_kategori">
                                        <?php
                                        foreach($data_kategori as $kategori){ ?>
                                            <option value='<?php echo $kategori->id_kategori ?>' <?php if($kategori->id_kategori == $id_kategori) { echo "selected"; } ?>>
                                                <?php echo $kategori ->nama_kategori ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="nama_barang">Nama Barang</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang"
                                        value="<?php echo $nama_barang ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="harga">Harga</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga"
                                        value="<?php echo $harga ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="stock">Stock</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="stock" class="form-control" placeholder="Input Stock Barang"
                                        value="<?php echo $stock ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <a href="<?php echo site_url('Barang') ?>" class="btn btn-danger">Kembali</a>
                                <input type="submit" value="Simpan" class="btn btn-primary">
                            </div>
                        </div>

                        <?php echo form_close() ?>
                  </div>
               </div>
            </div>
      </div>
   </div>
</section>
                                        </body>