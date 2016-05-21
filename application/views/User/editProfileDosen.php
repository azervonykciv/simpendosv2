<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Profil Anda
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li>
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
                <div class="box-body">
                    <form action="<?php echo base_url(); ?>User/updateProfileDosen" method="POST">
                        <input name="ID" value="<?php echo $user['ID_User']; ?>" type="hidden">
                        <input name="Status" value="<?php echo $user['Status']; ?>" type="hidden">
                        <div class="input-group">
                            <label>NIDN</label>
                            <input name="ID_User" value="<?php echo $user1[0]->ID_User; ?>" type="text" class="form-control"  readonly>
                        </div>
                        <div class="input-group">
                            <label>Nama</label>
                            <input name="Nama_User" value="<?php echo $user1[0]->Nama_User; ?>" type="text" class="form-control" >
                        </div>
                        <div class="input-group">
                            <label>Tempat Lahir</label>
                            <input name="tempat_lahir" value="<?php echo $dosen[0]->tempat_lahir; ?>" type="text" class="form-control" >
                        </div>
                        <div class="input-group">
                            <label>Tanggal Lahir</label>
                            <input name="tanggal_lahir" value="<?php echo $dosen[0]->tanggal_lahir; ?>" type="text" class="form-control" >
                        </div>
                        <div class="input-group">
                            <label>Gelar Lengkap</label>
                            <input name="gelar_lengkap" value="<?php echo $dosen[0]->gelar_lengkap; ?>" type="text" class="form-control" >
                        </div>
                        <div class="input-group">
                            <label>Alamat Malang</label>
                            <input name="alamat_malang" value="<?php echo $dosen[0]->alamat_malang; ?>" type="text" class="form-control" >
                        </div>
                        <div class="input-group">
                            <label>ref_aktivasiDosen</label>
                            <input name="ref_aktivasiDosen" value="<?php echo $dosen[0]->ref_aktivasiDosen; ?>" type="text" class="form-control" >
                        </div>
                        <div class="input-group">
                            <label>Password</label>
                            <input name="Password" value="<?php echo $user1[0]->Password; ?>" type="password" class="form-control" readonly>
                        </div>                       
                        <div class="input-group">
                            <input class="btn btn-primary btn-submit" type="submit" value="Update"> &nbsp;
                            <a href="<?php echo base_url(); ?>User/ubahPasswordDosen/<?php echo $user['ID_User']; ?>" class="btn btn-danger btn-submit">Ubah Password </a>
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->