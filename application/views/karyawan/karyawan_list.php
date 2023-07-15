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
                  DATA KARYAWAN
                </h3>
                <div class="card-tools">
                <a class="btn btn-primary" href="<?php echo site_url('Karyawan/tambah_karyawan') ?>"><i class="fas fa-plus mr-1"></i>Tambah</a>
                </div>
                
              </div><!-- /.card-header -->
              <div class="card-body">
              
              <table Class="table table-bordered table-striped" id="tabelkaryawan">
                <thead>
        <tr>
            <th>No</th>
            <th>Nama Karyawan</th>
            <th>Aksi</th>
        </tr>
</thead>
<tbody>
        <?php foreach($data_karyawan as $row) { ?>
                     <tr>
                        <td><?php echo $row->id_karyawan; ?></td>
                        <td><?php echo $row->nama_karyawan; ?></td>
                        <td class="text-nowrap">
                           <a href="<?php echo site_url('Karyawan/ubah_karyawan/'. $row->id_karyawan) ?>" class="btn btn-sm btn-warning"> 
                              <i class='fas fa-edit mr-1'></i>Ubah</a>
                           <a href="<?php echo site_url('Karyawan/hapus_karyawan/'. $row->id_karyawan) ?>" class="btn btn-sm btn-danger"> 
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
      $('#tabelkaryawan').DataTable();
   })
</script> 