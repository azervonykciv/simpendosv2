<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Data Dosen
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Lihat Data</a></li>
		<li class="active">Data Dosen</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th>ID</th>
							<th>NAMA MATAKULIAH</th>
							<th>JUMLAH SKS</th>
						</tr>
						</thead>
						<tbody>
						<?php
						foreach ($data->result() as $r)
						{ echo"
						<tr>
							<td>$r->ID_mk</td>
							<td>$r->Nama_mk</td>
							<td>$r->Jumlah_sks</td>
							<td>
								<a href="base_url()."/Jadwal/update/".$r->ID_mk">Edit</a> ||
								<a href="base_url()."/Jadwal/delete/".$r->ID_mk">Delete</a>
							</td>
						</tr> " }?>
					</table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section><!-- /.content -->