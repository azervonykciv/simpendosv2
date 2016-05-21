<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <br>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data User</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data User</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <a href="<?php echo base_url(); ?>User/insertUser" class="btn btn-success btn-submit">Masukan User Baru </a>
                  &nbsp;
                  <a href="<?php echo base_url(); ?>User/resetAllPassword" class="btn btn-danger btn-submit">Reset Semua Password </a>
                  &nbsp;
                  <!--<a href="<?php echo base_url(); ?>User/insertUserFromDosen" class="btn btn-warning btn-submit">Buat User Dosen</a>-->
                  </br>
                  </br>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID User</th>
                        <th>Nama</th>
                        <th>Privilage</th>
                        <th>Password</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach ($user1 as $d) : ?>
                          <tr>
                            <td><?php echo $d->ID_User ?></td>
                            <td><?php echo $d->Nama_User ?></td>
                            <td><?php echo $d->Status ?></td>
                            <td><?php echo $d->Password ?></td>
                            <td>
                              <a href="<?php echo base_url(); ?>User/editUser/<?php echo $d->ID_User?>" class="btn btn-warning">Edit</a>
                              <a href="<?php echo base_url(); ?>User/deleteUser/<?php echo $d->ID_User?>/<?php echo $user['ID_User']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID User</th>
                        <th>Nama</th>
                        <th>Privilage</th>
                        <th>Password</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->