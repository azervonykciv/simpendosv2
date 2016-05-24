<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Manajemen Data Dosen
        <small>table</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dosen</li>
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
                    <a href="<?php echo base_url(); ?>dosen/insert" class="btn btn-success btn-submit">Masukan Dosen Baru</a>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NIDN</th>
                                <th>NAMA</th>
                                <th>Gelar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dosen as $key): ?>
                                <tr>
                                    <td><?php echo $key->nidn ?></td>
                                    <td><?php echo $key->nama_dosen ?></td>
                                    <td><?php echo $key->gelar_lengkap ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>dosen/edit/<?php echo $key->nidn;?>" class="btn btn-warning">Edit</a>
                                        <a href="<?php echo base_url(); ?>dosen/delete/<?php echo $key->nidn;?>/<?php echo $user['ID_User'];?>" class="btn btn-danger">Delete</a>
                                        <a href="<?php echo base_url()."dosen/program/".$key['ID_Dosen']; ?>" class="btn btn-danger">Program</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>NIDN</th>
                            <th>NAMA</th>
                        </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->