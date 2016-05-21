<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Ubah Password
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profil</li>
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
                </div><!-- /.box-header -->
                <div class="box-body">
                    <form action="<?php echo base_url(); ?>User/do_ubahPasswordAdmin" method="POST">
                        <input name="ID" value="<?php echo $user['ID_User']; ?>" type="hidden">
                        <input name="Status" value="<?php echo $user['Status']; ?>" type="hidden">
                        <div class="input-group">
                            <label>Password Lama</label>
                            <input name="PasswordLama" type="password" class="form-control" >
                        </div>
                        <div class="input-group">
                            <label>Password Baru</label>
                            <input name="PasswordBaru" type="password" class="form-control" >
                        </div>
                        <div class="input-group">
                            <input class="btn btn-primary btn-submit" type="submit" value="Ubah Password">
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->