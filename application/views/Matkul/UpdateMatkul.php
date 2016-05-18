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

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
              <form method="POST" action="<?php echo base_url()."jadwal/do_update"; ?>">
	 <table id="example1" class="table table-bordered table-striped">
		<tr>
			<td>Kode Mata Kuliah</td>
			<td><input type="text" width="60%" name="ID_mk" value="<?php echo $ID_mk; ?>" readonly  /></td>
		</tr>

		<tr>
			<td>Nama Mata Kuliah</td>
			<td><input type="text" name="Nama_mk" value="<?php echo $Nama_mk; ?>" /></td>
		</tr>

		<tr>
			<td>Jumlah SKS</td>
			<td><input type="text" name="Jumlah_sks" value="<?php echo $Jumlah_sks; ?>" /></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="btnSubmit" value="Simpan" /></td>
		</tr>
	</table>
	</form>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->