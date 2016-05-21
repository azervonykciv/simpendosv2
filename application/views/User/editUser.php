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
                    <h3 class="box-title">Masukan Dosen</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <form action="<?php echo base_url(); ?>User/updateUser" method="POST">
                        <input name="ID" value="<?php echo $user['ID_User']; ?>" type="hidden">
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
                            <input name="Password" value="<?php echo $user1[0]->Password; ?>" type="text" class="form-control" readonly>
                        </div>
                        <div class="input-group">
                            <label>Privilege</label>
                            <select class="form-control select2" name="Status" style="width: 100%;">
                              <option selected="selected" value="<?php echo $user1[0]->Status; ?>"><?php echo $user1[0]->Status; ?></option>
                              <option value="Admin">Admin</option>
                              <option value="Super Admin">Super Admin</option>
                            </select>
                        </div>                        
                        <div class="input-group">
                            <input class="btn btn-primary btn-submit" type="submit" value="Update"> &nbsp;
                            <a href="<?php echo base_url(); ?>User/resetPassword/<?php echo $user1[0]->ID_User; ?>/<?php echo $user1[0]->Status; ?>/<?php echo $user['ID_User']; ?>" class="btn btn-danger btn-submit">Reset Password </a>
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->