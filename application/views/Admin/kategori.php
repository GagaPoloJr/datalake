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
            <h2 class="section-title">Kategori Artikel</h2>
            <p class="section-lead">
              Semoga harimu menyenangkan, semangat!
            </p>
          </div>
          <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h4>List Kategori Artikel</h4>
              </div>
              <div class="card-body">
                    <a href="<?php echo base_url() . 'Kategori' ?>" class="btn btn-lg icon-left btn-primary"><i class="far fa-edit"></i> Tambah Kategori </a>
<br>
<br>
              <table style="width: 100%;" id="table-artikel" class="table table-bordered table-striped">
                  <thead style="background-color: white;">
                    <tr>
                      <th>No</th>
                      <th>Nama Kategori</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <style>
                    tbody.belang tr:nth-child(even) {
                      background-color: white;
                    }
                  </style>
                  
                    <tbody class="belang">
                      <?php $i=1 ?>
                      <?php $hitung = $this->db->from('kategori')->count_all_results(); ?>
                    <?php foreach ($kategori as $u) { ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $u->kategori; ?></td>
                        <td>
                        <?php if($hitung > 1){ ?>
                          <a onclick="hapus('<?php echo base_url().'Kategori/delete_kategori/'.$u->id_kategori ?>')" href="#deleteModal" class="btn btn-icon icon-left btn-danger" data-toggle="tooltip"  data-placement="top" title="Hapus"><i class="fas fa-times"></i></a>
                          <?php } else{ ?>
                          <a onclick="hapus('<?php echo base_url().'Kategori/delete_kategori/'.$u->id_kategori ?>')" href="#deleteModal" class="btn btn-icon icon-left btn-danger" data-toggle="tooltip"  data-placement="top" title="Hapus"><i class="fas fa-times"></i></a>
                            <br><br><br>
                            <?php }?>

                        </td>
                      </tr>
                      <?php $i++ ?>
                      <?php } ?>
                    </tbody>
               
                  <tfoot style="background-color: white;">
                    <tr>
                      <th>No</th>
                      <th>Nama Kategori</th>
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
  $('[data-toggle="tooltip"]').tooltip(
    {
        container: 'body'
    }

);
</script>

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