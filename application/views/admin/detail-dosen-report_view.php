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
                    <h3 class="box-title">Report</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="input-group">
                        <label>Subject</label>
                        <input value="<?php echo $jadwal[0]->subject; ?>" type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3" cols="75%" readonly><?php echo $jadwal[0]->deskripsi; ?></textarea>
                    </div>
                    <div class="input-group">
                        <a href="<?php echo base_url(); ?>admin/listreport" class="btn btn-primary">Back</a>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->