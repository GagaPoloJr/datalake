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
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/datatables/datatables.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css'?>">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/components.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/custom.css' ?>">


  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-94034622-3');
  </script>
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
            <h1>Dashboard</h1>
          </div>
          <div class="section-body">
            <h2 class="section-title">Selamat Datang Kembali Admin <?php echo $this->session->userdata('username'); ?></h2>
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
                <table style="width: 100%;" id="table-artikel" class="table table-bordered table-striped">
                  <thead style="background-color: white;">
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th>Penulis</th>
                      <th>Tanggal</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <style>
                    tbody.belang tr:nth-child(even) {
                      background-color: white;
                    }
                  </style>
                  <div>
                  <tbody class="belang">

                  <?php $i=1;
                      foreach ($post as $post){ ?>
                    
                      <tr>
                          <td><?= $i; ?></td>
                          <td><?= $post->title; ?></td>
                          <td><?= $post->title; ?></td>
                          <td><?= $post->name; ?></td>
                          <td><?= $post->date_updated; ?></td>
                          <td><?php
                          if ($post->status == 'no'){
                            echo "<span class='badge badge-danger'>belum publish </span>";
                          }
                          else{
                            echo "<span class='badge badge-success'>sudah dipublish </span>";
                          }
                           ?>
                          
                        </td>

                      </tr>
                      
                      <?php $i++;
                     } ?>
                    </tbody>
                   
                  </div>
                  <tfoot style="background-color: white;">
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th>Penulis</th>
                      <th>Tanggal</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </section>
      </div>

      <!-- footer -->
      <?php $this->load->view('Admin/_partial/footer') ?>


    </div>
  </div>

  <!-- General JS Scripts -->
  <?php $this->load->view('Admin/_partial/js') ?>
  

  <!-- <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script> -->




  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <!-- <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script> -->

  <script src="<?php echo base_url() . 'assets/js/scripts.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/js/custom.js' ?>"></script>


</body>

</html>