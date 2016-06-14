<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Edit Penjadwalan
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
                        <?php foreach ($jadwal as $r){ ?>
                            <tr>
                                <form method="POST" action='<?php echo base_url()."jadwal/updatepenjadwalan/";?><?php echo $r['ID_Jadwal'] ?>/<?php echo $user['ID_User'] ?>/<?php echo $r['ID_Dosen'] ?>/<?php echo $mk[0]['ID_Mk'] ?>/'>
                                    <td>
                                        <input class="form-control" type="text" name="ID_Mk" value="<?php echo $r['ID_Mk']?>"  readonly>
                                        <input class="form-control" type="hidden" name="ID_Dosen" value="<?php echo $r['ID_Dosen']?>">
                                        <input name="ID_User" type="hidden" value="<?php echo $user['ID_User']; ?>">
                                    </td>
                                    <td>
                                        <?php echo $mk[0]['Nama_mk'] ?>
                                    </td>
                                    <td>
                                        <?php echo $r['ID_Dosen']?>
                                    </td>
                                    <td>
                                        <select name="Kelas_MK" class="form-control" value="<?php echo $r['Kelas_MK'] ?>">
                                            <option value="a" <?php if ($r['Kelas_MK'] == 'a') { echo "selected"; } ?> >A</option>
                                            <option value="b" <?php if ($r['Kelas_MK'] == 'b') { echo "selected"; } ?> >B</option>
                                            <option value="c" <?php if ($r['Kelas_MK'] == 'c') { echo "selected"; } ?> >C</option>
                                            <option value="d" <?php if ($r['Kelas_MK'] == 'd') { echo "selected"; } ?> >D</option>
                                            <option value="e" <?php if ($r['Kelas_MK'] == 'e') { echo "selected"; } ?> >E</option>
                                            <option value="f" <?php if ($r['Kelas_MK'] == 'f') { echo "selected"; } ?> >F</option>
                                            <option value="g" <?php if ($r['Kelas_MK'] == 'g') { echo "selected"; } ?> >G</option>
                                            <option value="h" <?php if ($r['Kelas_MK'] == 'h') { echo "selected"; } ?> >H</option>
                                            <option value="i" <?php if ($r['Kelas_MK'] == 'i') { echo "selected"; } ?> >I</option>
                                            <option value="j" <?php if ($r['Kelas_MK'] == 'j') { echo "selected"; } ?> >J</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="hari" class="form-control">
                                            <option value="Senin" <?php if ($r['hari'] == 'Senin') { echo "selected"; } ?> >Senin</option>
                                            <option value="Selasa" <?php if ($r['hari'] == 'Selasa') { echo "selected"; } ?> >Selasa</option>
                                            <option value="Rabu" <?php if ($r['hari'] == 'Rabu') { echo "selected"; } ?> >Rabu</option>
                                            <option value="Kamis" <?php if ($r['hari'] == 'Kamis') { echo "selected"; } ?> >Kamis</option>
                                            <option value="Jumat" <?php if ($r['hari'] == 'Jumat') { echo "selected"; } ?> >Jumat</option>
                                            <option value="Sabtu" <?php if ($r['hari'] == 'Sabtu') { echo "selected"; } ?> >Sabtu</option>
                                            <option value="Minggu" <?php if ($r['hari'] == 'Minggu') { echo "selected"; } ?> >Minggu</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="Jam_KelasAwal" class="form-control">
                                            <option value="1" <?php if($r['Jam_KelasAwal'] == 1){echo "selected";} ?>>1</option>
                                            <option value="2" <?php if($r['Jam_KelasAwal'] == 2){echo "selected";} ?>>2</option>
                                            <option value="3" <?php if($r['Jam_KelasAwal'] == 3){echo "selected";} ?>>3</option>
                                            <option value="4" <?php if($r['Jam_KelasAwal'] == 4){echo "selected";} ?>>4</option>
                                            <option value="5" <?php if($r['Jam_KelasAwal'] == 5){echo "selected";} ?>>5</option>
                                            <option value="6" <?php if($r['Jam_KelasAwal'] == 6){echo "selected";} ?>>6</option>
                                            <option value="7" <?php if($r['Jam_KelasAwal'] == 7){echo "selected";} ?>>7</option>
                                            <option value="8" <?php if($r['Jam_KelasAwal'] == 8){echo "selected";} ?>>8</option>
                                            <option value="9" <?php if($r['Jam_KelasAwal'] == 9){echo "selected";} ?>>9</option>
                                            <option value="10" <?php if($r['Jam_KelasAwal'] == 10){echo "selected";} ?>>10</option>
                                            <option value="11" <?php if($r['Jam_KelasAwal'] == 11){echo "selected";} ?>>11</option>
                                            <option value="12" <?php if($r['Jam_KelasAwal'] == 12){echo "selected";} ?>>12</option>
                                            <option value="13" <?php if($r['Jam_KelasAwal'] == 13){echo "selected";} ?>>13</option>
                                            <option value="14" <?php if($r['Jam_KelasAwal'] == 14){echo "selected";} ?>>14</option>
                                        </select>
                                        S/D
                                        <select name="Jam_KelasAkhir" class="form-control">
                                            <option value="1" <?php if($r['Jam_KelasAkhir'] == 1){echo "selected";} ?>>1</option>
                                            <option value="2" <?php if($r['Jam_KelasAkhir'] == 2){echo "selected";} ?>>2</option>
                                            <option value="3" <?php if($r['Jam_KelasAkhir'] == 3){echo "selected";} ?>>3</option>
                                            <option value="4" <?php if($r['Jam_KelasAkhir'] == 4){echo "selected";} ?>>4</option>
                                            <option value="5" <?php if($r['Jam_KelasAkhir'] == 5){echo "selected";} ?>>5</option>
                                            <option value="6" <?php if($r['Jam_KelasAkhir'] == 6){echo "selected";} ?>>6</option>
                                            <option value="7" <?php if($r['Jam_KelasAkhir'] == 7){echo "selected";} ?>>7</option>
                                            <option value="8" <?php if($r['Jam_KelasAkhir'] == 8){echo "selected";} ?>>8</option>
                                            <option value="9" <?php if($r['Jam_KelasAkhir'] == 9){echo "selected";} ?>>9</option>
                                            <option value="10" <?php if($r['Jam_KelasAkhir'] == 10){echo "selected";} ?>>10</option>
                                            <option value="11" <?php if($r['Jam_KelasAkhir'] == 11){echo "selected";} ?>>11</option>
                                            <option value="12" <?php if($r['Jam_KelasAkhir'] == 12){echo "selected";} ?>>12</option>
                                            <option value="13" <?php if($r['Jam_KelasAkhir'] == 13){echo "selected";} ?>>13</option>
                                            <option value="14" <?php if($r['Jam_KelasAkhir'] == 14){echo "selected";} ?>>14</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="ruang" class="form-control" value="<?php echo $r['ruang'] ?>">
                                            <option value="3.16" <?php if($r['ruang'] == '3.16'){ echo "selected"; } ?>>3.16</option>
                                            <option value="4.01" <?php if($r['ruang'] == '4.01'){ echo "selected"; } ?>>4.01</option>
                                            <option value="4.02" <?php if($r['ruang'] == '4.02'){ echo "selected"; } ?>>4.02</option>
                                            <option value="4.03" <?php if($r['ruang'] == '4.03'){ echo "selected"; } ?>>4.03</option>
                                            <option value="4.04" <?php if($r['ruang'] == '4.04'){ echo "selected"; } ?>>4.04</option>
                                            <option value="4.23" <?php if($r['ruang'] == '4.23'){ echo "selected"; } ?>>4.23</option>
                                            <option value="5.05" <?php if($r['ruang'] == '5.05'){ echo "selected"; } ?>>5.05</option>
                                            <option value="5.26 A" <?php if($r['ruang'] == '5.26 A'){ echo "selected"; } ?>>5.26 A</option>
                                            <option value="5.26 B" <?php if($r['ruang'] == '5.26 B '){ echo "selected"; } ?>>5.26 B</option>
                                            <option value="6.10" <?php if($r['ruang'] == '6.10'){ echo "selected"; } ?>>6.10</option>
                                            <option value="6.11" <?php if($r['ruang'] == '6.11'){ echo "selected"; } ?>>6.11</option>
                                            <option value="6.12" <?php if($r['ruang'] == '6.12'){ echo "selected"; } ?>>6.12</option>
                                        </select>
                                    </td>
                                    <td align="center">
                                        <input type="submit" class="btn btn-success" name="upload" value="Submit" />
                                    </td>
                                </form>
                            </tr>
                        <?php } ?>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
