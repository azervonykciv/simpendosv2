<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Tables
        <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?>dosen">Dosen</a></li>
        <li class="active">Insert</li>
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
                    <h3 class="box-title">Profile Anda</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <form action="<?php echo base_url(); ?>User/updateProfileAdmin" method="POST">
                        <input name="ID" value="<?php echo $user['ID_User']; ?>" type="hidden">
                        <input name="Status" value="<?php echo $user['Status']; ?>" type="hidden">
                        <div class="input-group">
                            <label>ID User</label>
                            <input name="ID_User" value="<?php echo $user1[0]->ID_User; ?>" type="text" class="form-control"  readonly>
                        </div>
                        <div class="input-group">
                            <label>Nama User</label>
                            <input name="Nama_User" value="<?php echo $user1[0]->Nama_User; ?>" type="text" class="form-control" >
                        </div>
                        <div class="input-group">
                            <label>Password</label>
                            <input name="Password" value="<?php echo $user1[0]->Password; ?>" type="password" class="form-control" readonly>
                        </div>                       
                        <div class="input-group">
                            <input class="btn btn-primary btn-submit" type="submit" value="Update"> &nbsp;
                            <a href="<?php echo base_url(); ?>User/ubahPasswordAdmin/<?php echo $user['ID_User']; ?>/<?php echo $user['Status']; ?>" class="btn btn-danger btn-submit">Ubah Password </a>
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->