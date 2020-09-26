<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>&mdash; Bem Undip 2020</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/bootstrap/css/bootstrap.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/fontawesome/css/all.min.css' ?>">


  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/datatables/datatables.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css' ?>">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/components.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/custom.css' ?>">



  <!-- Start GA -->

  <!-- /END GA -->
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <!-- Navbar -->
      <?php $this->load->view('Admin/_partial/navbar') ?>
      <!-- sidebar -->
      <?php $this->load->view('Admin/_partial/sidebar') ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Artikel</h1>
          </div>
          <div class="section-body">
            <h2 class="section-title">Artikel BEM UNDIP</h2>
            <p class="section-lead">
              Semoga harimu menyenangkan, semangat!
            </p>
          </div>
          <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h4>Artikel terakhir</h4>
              </div>
              <div class="card-body">
                
                <?php $this->load->view('Admin/_partial/alert_data') ?>

                <a href="<?php echo base_url() . 'Artikel' ?>" class="btn btn-lg icon-left btn-primary"><i class="far fa-edit"></i> Tambah Artikel </a>

                <br>
                <br>
                <table style="width: 100%;" id="table-artikel" class="table table-bordered table-striped">
                  <thead style="background-color: white;">
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th>Penulis</th>
                      <th>Tanggal Dibuat</th>
                      <th>Tanggal Diupdated</th>
                      <th>Tanggal Dipublish</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <style>
                    tbody.belang tr:nth-child(even) {
                      background-color: white;
                    }
                  </style>
                  <div>
                    <tbody class="belang">
                      <?php $i = 1 ?>
                      <?php $hitung = $this->db->from('post')->count_all_results(); ?>
                      <?php foreach ($post as $tampil) { ?>

                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $tampil->title; ?></td>
                          <td><?php echo $tampil->kategori ?></td>
                          <td><?php echo "$tampil->name"; ?></td>
                          <td><?php echo $tampil->date_created; ?></td>
                          <td><?php echo $tampil->date_updated; ?></td>
                          <td><?php echo $tampil->date_uploaded ?></td>
                          <td><?php if ($tampil->status == 'no'){
                            echo "<span class='badge badge-danger'>belum publish </span>";
                          }
                          else{
                            echo "<span class='badge badge-success'>sudah dipublish </span>";
                          }
                           ?></td>

                          <td>
                          <?php if($hitung > 1){ ?>
                            <?php if ($tampil->status == "no") { ?>
                              <a onclick="konfirmasi('<?php echo base_url() . 'Artikel/konfirmasi_artikel/' . $tampil->id ?>')" href="#konfirmasidata" class="btn btn-icon icon-left btn-success" data-toggle="tooltip" data-placement="top" title="Konfirmasi"><i class="fas fa-check"></i></a>
                              <a style="pointer-events:none; cursor:default;" href="#" class="btn btn-icon icon-left btn-secondary" data-toggle="tooltip" data-placement="top" title="Sembunyikan"><i class="far fa-user"></i></a>
                              <a onclick="hapus('<?php echo base_url() . 'Artikel/delete_article/' . $tampil->id ?>')" href="#!" class="btn btn-icon icon-left btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-times"></i></a>

                            <?php } else { ?>
                              <a style="pointer-events:none; cursor:default;" href="#" class="btn btn-icon icon-left btn-secondary" data-toggle="tooltip" data-placement="top" title="Konfirmasi"><i class="fas fa-check"></i></a>
                              <a href="<?php echo base_url() . 'Artikel/hide_artikel/' . $tampil->id ?>" class="btn btn-icon icon-left btn-warning" data-toggle="tooltip" data-placement="top" title="Sembunyikan"><i class="far fa-user"></i></a>

                            <?php } ?>
                            <a href="<?php echo base_url() . 'Artikel/halaman_edit/' . $tampil->id ?>" class="btn btn-icon icon-left btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                            
                          <?php } else{ ?>
                            <?php if ($tampil->status == "no") { ?>
                              <a onclick="konfirmasi('<?php echo base_url() . 'Artikel/konfirmasi_artikel/' . $tampil->id ?>')" href="#konfirmasidata" class="btn btn-icon icon-left btn-success" data-toggle="tooltip" data-placement="top" title="Konfirmasi"><i class="fas fa-check"></i></a>
                              <a style="pointer-events:none; cursor:default;" href="#" class="btn btn-icon icon-left btn-secondary" data-toggle="tooltip" data-placement="top" title="Sembunyikan"><i class="far fa-user"></i></a>
                              <a onclick="hapus('<?php echo base_url() . 'Artikel/delete_article/' . $tampil->id ?>')" href="#!" class="btn btn-icon icon-left btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-times"></i></a>

                            <?php } else { ?>
                              <a style="pointer-events:none; cursor:default;" href="#" class="btn btn-icon icon-left btn-secondary" data-toggle="tooltip" data-placement="top" title="Konfirmasi"><i class="fas fa-check"></i></a>
                              <a href="<?php echo base_url() . 'Artikel/hide_artikel/' . $tampil->id ?>" class="btn btn-icon icon-left btn-warning" data-toggle="tooltip" data-placement="top" title="Sembunyikan"><i class="far fa-user"></i></a>

                            <?php } ?>
                            <a href="<?php echo base_url() . 'Artikel/halaman_edit/' . $tampil->id ?>" class="btn btn-icon icon-left btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                            <br><br><br>
                            <?php } ?>
                            
                          </td>
                        </tr>
                        <?php $i++ ?>
                      <?php } ?>
                    </tbody>
                  </div>
                  <tfoot style="background-color: white;">
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th>Penulis</th>
                      <th>Tanggal Dibuat</th>
                      <th>Tanggal Diupdated</th>
                      <th>Tanggal Dipublish</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </section>
      </div>


      <!-- Modal Confirm -->
      <?php $this->load->view('Admin/_partial/modal-confirm') ?>



      <!-- footer -->
      <?php $this->load->view('Admin/_partial/footer') ?>


    </div>
  </div>

  <!-- General JS Scripts -->
  <?php $this->load->view('Admin/_partial/js') ?>

  

  <script>
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
      }

    );
  </script>


  <script src="<?php echo base_url() . 'assets/js/scripts.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/js/custom.js' ?>"></script>


</body>

</html>