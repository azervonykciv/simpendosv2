<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Penjadwalan
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active"><a href="#">Penjadwalan</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <?php
                if($this->session->flashdata('pesan'))
                {
                    echo '<div class="alert alert-danger">'
                        .$this->session->flashdata('pesan').'</div>';
                }elseif($this->session->flashdata('sukses'))
                {
                    echo '<div class="alert alert-success">'
                        .$this->session->flashdata('sukses').'</div>';
                }
                ?>
                <div class="box-header">
                    <h3 class="box-title">Penjadwalan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table border="1" id="example1" class="table table-bordered table-striped"; width="60%; ">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>ID MK</th>
                            <th>ID Dosen</th>
                            <th>Kelas MK</th>
                            <th>Hari</th>
                            <th>Jam Kelas</th>
                            <th>Ruang</th>
                            <th>ACTION</th>
                        </tr>
                        </thead>
                        <?php foreach ($data as $r){ ?>
                            <tr>
                                <td><?php echo $r['ID_Jadwal'] ?></td>
                                <td><?php echo $r['ID_Mk'] ?></td>
                                <td><?php echo $r['ID_Dosen'] ?></td>
                                <td><?php echo $r['Kelas_MK'] ?></td>
                                <td><?php echo $r['hari'] ?></td>
                                <td><?php echo $r['Jam_Kelas'] ?></td>
                                <td><?php echo $r['ruang'] ?></td>
                                <td align="center">
                                    <a class="btn btn-warning" href="<?php echo base_url()."jadwal/editpenjadwalan/".$r['ID_Jadwal']; ?>/<?php echo $user['ID_User']; ?>/<?php echo $ID?>/<?php echo $r['ID_Mk']; ?>">Edit</a>
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
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Ruang</th>
                            <th>ACTION</th>
                        </tr>
                        </thead>
                        <?php foreach ($mk as $r){ ?>
                            <tr>
                                <form method="POST" action='<?php echo base_url()."Admin/pro_jadwal/";?>'>
                                    <td>
                                        <input class="form-control" type="text" name="ID_Mk" value="<?php echo $r['ID_Mk']?>"  readonly>
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
                                        <select name="hari" class="form-control">
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
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
                                    <td>
                                        <select name="ruang" class="form-control">
                                            <option value="3.16">3.16</option>
                                            <option value="4.01">4.01</option>
                                            <option value="4.02">4.02</option>
                                            <option value="4.03">4.03</option>
                                            <option value="4.04">4.04</option>
                                            <option value="4.23">4.23</option>
                                            <option value="5.05">5.05</option>
                                            <option value="5.26 A">5.26 A</option>
                                            <option value="5.26 B">5.26 B</option>
                                            <option value="6.10">6.10</option>
                                            <option value="6.11">6.11</option>
                                            <option value="6.12">6.12</option>
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
