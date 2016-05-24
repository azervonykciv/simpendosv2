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
                <a class="btn btn-danger" href="<?php echo base_url()."jadwal/deletepenjadwalan/".$r['ID_Jadwal']; ?>/<?php echo $user['ID_User']; ?>/<?php echo $ID?>/<?php echo $r['ID_Mk']; ?>">Delete</a>
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
							<th>Kelas</th>
              <th>Jam</th>
							<th>ACTION</th>
						</tr>
						</thead>
						<?php foreach ($mk as $r){ ?>
            <tr>
            <form method="POST" action='<?php echo base_url()."Dosen/pro_jadwal/";?>'>
							<td>
                  <input class="form-control" type="text" name="ID_Mk" value="<?php echo $r['ID_Mk']?>"  required autofocus readonly>
                  <input class="form-control" type="hidden" name="ID_Dosen" value="<?php echo $ID?>">
                  <input name="ID_User" type="hidden" value="<?php echo $user['ID_User']; ?>">
              </td>
							<td>
                  <?php echo $r['Nama_mk'] ?>
              </td>
							<td>
                  <?php echo $r['Jumlah_sks'] ?>
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
                <select name="Jam_KelasAwal" class="form-control">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                </select>
                S/D
                <select name="Jam_KelasAkhir" class="form-control">
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                </select>
              </td>
							<td align="center">
                <input type="submit" class="btn btn-primary" name="upload" value="Pilih" />
							  <!--<a class="btn btn-primary" href="<?php echo base_url()."jadwal/pro_jadwal/".$r['ID_Mk']; ?>/<?php echo $user['ID_User']; ?>" type="submit">Pilih</a>-->
              </td>
              </form>
						</tr> 
					
						<?php } ?>
					</table>

          </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
