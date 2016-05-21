<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Tables
        <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?>dosen">Dosen</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
<style type="text/css">
    .input-group{
        padding-bottom: 2em;
    }
</style>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Masukan Dosen</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <form action="<?php echo base_url(); ?>admin/updatedosen" method="POST">
                        <input name="ID_User" type="hidden" value="<?php echo $user['ID_User']; ?>">
                        <div class="input-group">
                            <label>ID Dosen</label>
                            <input name="ID_Dosen" value="<?php echo $dosen[0]->ID_Dosen; ?>" type="text" class="form-control" placeholder="012345" readonly>
                        </div>
                        <div class="input-group">
                            <label>Nama</label>
                            <input name="nama_dosen" value="<?php echo $dosen[0]->nama_dosen; ?>" type="text" class="form-control" placeholder="Tama">
                        </div>
                        <div class="input-group">
                            <label>tanggal_lahir</label>
                            <input name="tanggal_lahir" value="<?php echo $dosen[0]->tanggal_lahir; ?>" type="text" class="form-control" placeholder="1990-1-1">
                        </div>
                        <div class="input-group">
                            <label>gelar_lengkap</label>
                            <input name="gelar_lengkap" value="<?php echo $dosen[0]->gelar_lengkap; ?>" type="text" class="form-control" placeholder="S.Kom, M.Kom">
                        </div>
                        <div class="input-group">
                            <label>alamat_malang</label>
                            <input name="alamat_malang" value="<?php echo $dosen[0]->alamat_malang; ?>" type="text" class="form-control" placeholder="JL. Tirto Utomo">
                        </div>
                        <div class="input-group">
                            <label>ref_aktivasiDosen</label>
                            <input name="ref_aktivasiDosen" value="<?php echo $dosen[0]->ref_aktivasiDosen; ?>" type="text" class="form-control" placeholder="A">
                        </div>
                        <div class="input-group">
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->