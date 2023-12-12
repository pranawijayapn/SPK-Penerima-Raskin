<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hasil WP Pangkat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Hasil WP Pangkat</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Hasil WP Pangkat</h3>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>ID Matrix</th>
                    <th>ID Alternatif</th>
                    <th>Nama Warga</th>
                    <th>Alamat</th>
                    <th>ID Kriteria</th>
                    <th>Nama Kriteria</th>
                    <th>ID Bobot</th>
                    <th>Value</th>
                    <th>Nilai</th>
                    <th>Keterangan</th>
                    <th>Normalisasi Terbobot</th>
                    <th>Pangkat</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  <?php
                  $no=0;
                  foreach($dataMb as $row):
                    $no++;
                    ?>
                <tr>
                <th> <?= $no; ?></th>
                    <td><?= $row->id_matrix; ?></td>
                    <td><?= $row->idalternatif; ?></td>
                    <td><?= $row->nmalternatif; ?></td>
                    <td><?= $row->alamat; ?></td> 
                    <td><?= $row->id_kriteria; ?></td>
                    <td><?= $row->nm_kriteria; ?></td> 
                    <td><?= $row->id_bobot; ?></td>
                    <td><?= $row->value; ?></td>
                    <td><?= $row->nilai; ?></td>
                    <td><?= $row->keterangan; ?></td>        
                    <td><?= $row->normalisasi_w; ?></td> 
                    <td><?= $row->pangkat; ?></td>    
                  </tr>

                  <?php
                  endforeach;
                  ?>
                 
                  </tbody>
                 
                </table>
                </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    
    </section>
    <!-- /.content -->
  </div>