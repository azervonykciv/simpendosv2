<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Home Admin
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          </ol>
        </section>

        <!-- Main content -->

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Report</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>ID Jadwal</th>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($report as $key): ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $key->id_jadwal_dosen ?></td>
                                <td><?php echo $key->subject ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/editreport/<?php echo $key->id_jadwal_report?>" class="btn btn-success">Update</a>
                                    <a href="<?php echo base_url(); ?>admin/detailreport/<?php echo $key->id_jadwal_report?>" class="btn btn-warning">Detail</a>
                                    <a href="<?php echo base_url(); ?>admin/tolakreport/<?php echo $key->id_jadwal_report.'/'.$key->id_jadwal_dosen?>/<?php echo $user['ID_User']; ?>" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach ?>

                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->