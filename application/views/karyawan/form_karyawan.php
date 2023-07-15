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
                                <label for="id_karyawan">No</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                <div class="form-line">
                                        <input type="text" name="id_karyawan" class="form-control" placeholder="Masukkan Nomor"
                                        value="<?php echo $id_karyawan ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="id_karyawan">Karyawan</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                <div class="form-line">
                                        <input type="text" name="nama_karyawan" class="form-control" placeholder="Masukkan Nama Karyawan"
                                        value="<?php echo $nama_karyawan ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                       

                        
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <a href="<?php echo site_url('Karyawan') ?>" class="btn btn-danger">Kembali</a>
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