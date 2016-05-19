<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <br>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Log</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Log</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID User</th>
                        <th>Tanggal</th>
                        <th>Aktivitas</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach ($log as $d) : ?>
                          <tr>
                            <td><?php echo $d->ID_User ?></td>
                            <td><?php echo $d->Tanggal ?></td>
                            <td><?php echo $d->Aktifitas ?></td>
                          </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID User</th>
                        <th>Tanggal</th>
                        <th>Aktivitas</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->