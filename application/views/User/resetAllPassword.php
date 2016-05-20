<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        User
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?>User">User</a></li>
        <li class="active">Reset Password</li>
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
                    <h3 class="box-title">Reset Password</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <form action="<?php echo base_url(); ?>User/do_resetAllPassword" method="POST">
                        <input name="ID_User" value="<?php echo $user['ID_User']; ?>" type="hidden" class="form-control"  readonly>
                        <div class="input-group">
                            <label>User</label>
                            <select class="form-control select2" name="Status" style="width: 100%;">
                              <option selected="selected" value="All">All</option>
                              <option value="Admin">Admin</option>
                              <option value="Super Admin">Super Admin</option>
                              <option value="Dosen">Dosen</option>
                            </select>
                        </div>                        
                        <div class="input-group">
                            <input class="btn btn-primary" type="submit" value="Reset">
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->