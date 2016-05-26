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
                    <form action="<?php echo base_url(); ?>admin/updatejadwal/<?php echo $jadwal[0]->ID_Jadwal.'/'. $jadwal[0]->id_jadwal_dosen .'/'. $jadwal[0]->id_jadwal_report ?>" method="POST">
                        <input name="ID" value="<?php echo $user['ID_User']; ?>" type="hidden">
                        <div class="input-group">
                            <label>ID Jadwal</label>
                            <input name="ID_Jadwal" value="<?php echo $jadwal[0]->ID_Jadwal; ?>" type="text" class="form-control" readonly>
                        </div>
                        <div class="input-group">
                            <label>ID MK</label>
                            <input name="ID_Mk" value="<?php echo $jadwal[0]->ID_Mk; ?>" type="text" class="form-control" readonly>
                        </div>
                        <div class="input-group">
                            <label>ID Dosen</label>
                            <input name="ID_Dosen" value="<?php echo $jadwal[0]->ID_Dosen; ?>" type="text" class="form-control" readonly>
                        </div>
                        <div class="input-group">
                            <label>Kelas</label>
                            <select name="Kelas_MK" class="form-control">
                                <option value="a" <?php if($jadwal[0]->Kelas_MK === 'a'){echo "selected";} ?>>A</option>
                                <option value="b" <?php if($jadwal[0]->Kelas_MK === 'b'){echo "selected";} ?>>B</option>
                                <option value="c" <?php if($jadwal[0]->Kelas_MK === 'c'){echo "selected";} ?>>C</option>
                                <option value="d" <?php if($jadwal[0]->Kelas_MK === 'd'){echo "selected";} ?>>D</option>
                                <option value="e" <?php if($jadwal[0]->Kelas_MK === 'e'){echo "selected";} ?>>E</option>
                                <option value="f" <?php if($jadwal[0]->Kelas_MK === 'f'){echo "selected";} ?>>F</option>
                                <option value="g" <?php if($jadwal[0]->Kelas_MK === 'g'){echo "selected";} ?>>G</option>
                                <option value="h" <?php if($jadwal[0]->Kelas_MK === 'h'){echo "selected";} ?>>H</option>
                                <option value="i" <?php if($jadwal[0]->Kelas_MK === 'i'){echo "selected";} ?>>I</option>
                                <option value="j" <?php if($jadwal[0]->Kelas_MK === 'j'){echo "selected";} ?>>J</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label>Jam</label>
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
                        </div>
                        <div class="input-group">
                            <input type="submit" class="btn btn-primary" value="Ganti Jadwal">
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->