<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Mata Kuliah
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data Mata Kuliah</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table border="1" id="example1" class="table table-bordered table-striped"; width="60%; ">
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
<<<<<<< HEAD
              <td><?php echo $r['Nama_mk'] ?></td>
=======
              <td><?php echo $r['Nama _mk'] ?></td>
>>>>>>> origin/master
              <td><?php echo $r['Jumlah_sks'] ?></td>
              <td align="center">
                <a class="btn btn-primary" href="<?php echo base_url()."jadwal/update/".$r['ID_Mk']; ?>">Edit</a>
                <a class="btn btn-primary" href="<?php echo base_url()."jadwal/delete/".$r['ID_Mk']; ?>">Delete</a>
              </td>
            </tr> 
          
            <?php } ?>
          </table>
          <a align="center" class="btn btn-primary" href="<?php echo base_url()."jadwal/insert"; ?>">Insert Data</a>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->