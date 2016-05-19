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
					<table border="1" id="example1" class="table table-bordered table-striped"; width="60%; ">
						<thead>
						<tr>
							<th>ID</th>
							<th>NAMA MATAKULIAH</th>
							<th>JUMLAH SKS</th>
							<th>ACTION</th>
						</tr>
						</thead>
						<?php foreach ($data as $r){ ?>
						<tr>
							<td><?php echo $r['ID_Mk'] ?></td>
							<td><?php echo $r['Nama_mk'] ?></td>
							<td><?php echo $r['Jumlah_sks'] ?></td>
							<td align="center">
								<a href="<?php echo base_url()."jadwal/update/".$r['ID_Mk']; ?>">Edit</a>
								<a href="<?php echo base_url()."jadwal/delete/".$r['ID_Mk']; ?>">Delete</a>
							</td>
						</tr> 
					
						<?php } ?>
					</table>
					<a href="<?php echo base_url()."jadwal/insert"; ?>">Insert Data</a>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section><!-- /.content -->
