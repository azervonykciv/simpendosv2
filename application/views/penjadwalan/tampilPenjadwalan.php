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
                    <table border="1" id="example1" class="table table-bordered table-striped"; width="60%; ">
            <thead>
            <tr>
              <th>ID</th>
              <th>ID MK</th>
              <th>ID Dosen</th>
              <th>Kelas MK</th>
              <th>Jam Kelas</th>
              <th>ACTION</th>
            </tr>
            </thead>
            <?php foreach ($data as $r){ ?>
            <tr>
              <td><?php echo $r['ID_Jadwal'] ?></td>	
              <td><?php echo $r['ID_Mk'] ?></td>
              <td><?php echo $r['ID_Dosen'] ?></td>
              <td><?php echo $r['Kelas_MK'] ?></td>
              <td><?php echo $r['Jam_Kelas'] ?></td>
              <td align="center">
                <a class="btn btn-danger" href="<?php echo base_url()."jadwal/deletepenjadwalan/".$r['ID_Jadwal']; ?>">Delete</a>
              </td>
            </tr> 
          
            <?php } ?>
          </table>

                </div><!-- /.box-body -->
                <div class="box-body">
                
                    <table border="1" id="example1" class="table table-bordered table-striped"; width="60%; ">
						<thead>
						<tr>
							<th>ID</th>
							<th>NAMA MATAKULIAH</th>
							<th>JUMLAH SKS</th>
							<th>Dosen</th>
							<th>Kelas</th>
              <th>Jam</th>
							<th>ACTION</th>
						</tr>
						</thead>
						<?php foreach ($mk as $r){ ?>
            <form method="POST" action="<?php echo base_url()."jadwal/pro_jadwal/".$r['ID_Mk']; ?>">
						<tr>
							<td>
                  <input class="form-control" type="text" name="ID_Mk" value="<?php echo $r['ID_Mk']?>"  required autofocus readonly>
              </td>
							<td><?php echo $r['Nama_mk'] ?></td>
							<td><?php echo $r['Jumlah_sks'] ?></td>
							<td>
								<select name="ID_Dosen" class="form-control" >
                  <option value="" />
                    <?php 
                      foreach ($dosen as $row) {?>                       
                      <option  value="<?php echo $row['ID_Dosen'];?>"><?php echo $row['nama_dosen'];?></option>  
                    <?php } ?>
                </select>
							</td>
							<td>
								<select name="Kelas_MK" class="form-control">
				                  <option value="a">A</option>
				                  <option value="b">B</option>
				                  <option value="c">C</option>
				                  <option value="d">D</option>
				                  <option value="e">E</option>
				                  <option value="f">F</option>
				                  <option value="g">G</option>
				                  <option value="h">H</option>
				                  <option value="i">I</option>
				                  <option value="j">J</option>
				                </select>
							</td>
              <td>
                <select name="Jam_Kelas" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                        </select>
              </td>
							<td align="center">
              <!--  <input type="submit" class="btn btn-primary" name="btnSubmit" value="Save" /> -->
							  <a class="btn btn-primary" href="<?php echo base_url()."jadwal/pro_jadwal/".$r['ID_Mk']; ?>" type="submit">Pilih</a>
              </td>
						</tr> 
					
						<?php } ?>
					</table>

          </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
