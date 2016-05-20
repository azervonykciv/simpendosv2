<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Manajemen Data Mata Kuliah
        <small>table</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data Mata Kuliah</li>
    </ol>
</section>

<style type="text/css">
    .btn-submit{
        margin-bottom: 2em;
    }
</style>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">List Data Dosen</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                 <a class="btn btn-success btn-submit" href="<?php echo base_url()."jadwal/insert"; ?>">Masukkan Mata Kuliah Baru</a>
                    <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>NAMA MATA KULIAH</th>
              <th>JUMLAH SKS</th>
              <th>ACTION</th>
            </tr>
            </thead>
            <?php foreach ($data as $r){ ?>
            <tr>
              <td><?php echo $r['ID_Mk'] ?></td>
              <td><?php echo $r['Nama_mk'] ?></td>
              <td><?php echo $r['Jumlah_sks'] ?></td>
              <td align="center">
                <a class="btn btn-warning" href="<?php echo base_url()."jadwal/update/".$r['ID_Mk']; ?>">Edit</a>
                <a class="btn btn-danger" href="<?php echo base_url()."jadwal/delete/".$r['ID_Mk']; ?>">Delete</a>
              </td>
            </tr> 
          
            <?php } ?>
          </table>
         

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->