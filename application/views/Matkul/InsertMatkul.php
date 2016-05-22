<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Tables
        <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
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
                    <h3 class="box-title">Masukan Mata Kuliah</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <form method="POST" action="<?php echo base_url()."jadwal/do_insert"; ?>">
                       <input name="ID_User" value="<?php echo $user['ID_User']; ?>" type="hidden">
                       <div class="input-group">
                            <label>Kode Mata Kuliah</label>
                            <input name="ID_Mk" type="text" class="form-control" placeholder="012345">
                        </div>
                        <div class="input-group">
                            <label>Nama Mata Kuliah</label>
                            <input name="Nama_mk" type="text" class="form-control" placeholder="Pemrograman Web">
                        </div>
                        <div class="input-group">
                            <label>Jumlah SKS</label>
                            <input name="Jumlah_sks" type="text" class="form-control" placeholder="2">
                        </div>
                        
                        <div class="input-group">
                            <input class="btn btn-primary" type="submit" value="Submit">

	               </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->