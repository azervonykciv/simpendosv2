<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Tables
        <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <a href="<?php echo base_url(); ?>dosen/insert" class="btn btn-success">Insert</a>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NIDN</th>
                                <th>NAMA</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dosen as $key): ?>
                                <tr>
                                    <td><?php echo $key->nidn ?></td>
                                    <td><?php echo $key->nama_dosen ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>dosen/edit/<?php echo $key->nidn?>" class="btn btn-warning">Edit</a>
                                        <a href="<?php echo base_url(); ?>dosen/delete/<?php echo $key->nidn?>" class="btn btn-danger">Delete</a>
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