<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Jadwal
        <small>yang anda miliki</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Jadwal</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Notifikasi</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Notif</th>
                            <th>Detail Notif</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no =1;
                        foreach ($notif->result() as $r)
                        {
                        echo "
                        <tr>
                            <td>$r->Nama_Notif</td>
                            <td>$r->Detail_Notifikasi</td>
                            <td>".anchor('Dosen/delete/'.$r->ID_Notif,'Edit',array('class'=>'btn btn-warning'))."</td>
                         "; } ?>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List Jadwal</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Jam</th>
                                <th>Ruangan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($jadwal as $key): ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $key->Nama_mk ?></td>
                                    <td><?php echo $key->Jam_Kelas ?></td>
                                    <td><?php echo $key->Kelas_MK ?></td>
                                    <td>
                                        <?php if ($key->status_jadwal === '0'): ?>
                                            Belum konfirmasi
                                        <?php elseif ($key->status_jadwal === '1'): ?>
                                            Proses laporan
                                        <?php elseif ($key->status_jadwal === '2'): ?>
                                            Sudah dikonfirmasi
                                        <?php elseif ($key->status_jadwal === '3'): ?>
                                            Laporan ditolak
                                        <?php endif ?>
                                    </td>
                                    <td>
                                        <?php if ($key->status_jadwal === '0' || $key->status_jadwal === '3'): ?>
                                            <a href="<?php echo base_url(); ?>dosen/konfirmasi/<?php echo $key->id_jadwal_dosen?>" class="btn btn-success">Konfirmasi</a>
                                            <a href="<?php echo base_url(); ?>dosen/report/<?php echo $key->id_jadwal_dosen?>" class="btn btn-warning">Report</a>
                                        <?php else: ?>
                                            <a href="<?php echo base_url(); ?>dosen/konfirmasi/<?php echo $key->id_jadwal_dosen?>" class="btn btn-success" disabled>Konfirmasi</a>
                                            <a href="<?php echo base_url(); ?>dosen/report/<?php echo $key->id_jadwal_dosen?>" class="btn btn-warning" disabled>Report</a>
                                        <?php endif ?>
                                        
                                    </td>
                                </tr>
                            <?php $no++; ?>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>id_jadwal</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->