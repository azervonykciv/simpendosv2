<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Report
        <small>Laporkan jadwal</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?>dosen/jadwalByNidn/701058601">Jadwal</a></li>
        <li class="active">Report</li>
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
                    <h3 class="box-title">Form Report</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <form action="<?php echo base_url(); ?>dosen/insertreport" method="POST">
                        <input name="id" type="text" value="<?php echo $id; ?>" hidden>
                        <input name="ID_User" value="<?php echo $user['ID_User']; ?>" type="hidden">
                        <div class="input-group">
                            <label>Subject</label>
                            <input name="subject" type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="input-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="3" cols="75%"></textarea>
                        </div>
                        <div class="input-group">
                            <input class="btn btn-primary" type="submit" value="Kirim">
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->