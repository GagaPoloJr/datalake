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
            <h2 class="section-title">Akun Admin BEM UNDIP</h2>
            <p class="section-lead">
              Semoga harimu menyenangkan, semangat!
            </p>
          </div>
          <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h4>List Akun Admin</h4>
              </div>
              <div class="card-body">
                  <?php 
                //   session_start();
                  $level = $_SESSION['level'];
                  $id = $_SESSION['id'];
                  if($level == "1"){ ?>
                    <a href="<?php echo base_url() . 'User' ?>" class="btn btn-lg icon-left btn-primary"><i class="far fa-edit"></i> Tambah Admin </a>
                  <?php } ?>
<br>
<br>
              <table style="width: 100%;" id="table-artikel" class="table table-bordered table-striped">
                  <thead style="background-color: white;">
                    <tr>
                      <th>No</th>
                      <th>Nama Admin</th>
                      <th>Role Admin</th>
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
                      <?php $i=1 ?>
                      <?php $hitung = $this->db->from('user')->count_all_results(); ?>

                    <?php foreach ($user as $u) { ?>
                      
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $u->name; ?></td>
                        <td><?php if ($u->user_level == "1"){
                          echo "Admin Tertinggi";
                        } else {
                            echo"Admin Staff";
                        } ?></td>
                        <td>
                        <?php if($hitung > 1){ ?>
                          <?php if($level == "1"){ ?>
                          <a href="<?php echo base_url().'User/halaman_edit/'.$u->user_id ?>" class="btn btn-icon icon-left btn-primary" data-toggle="tooltip"  data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                          <?php if($u->user_id !== $id){ ?>
                          <a href="<?php echo base_url().'User/delete_akun/'.$u->user_id ?>" class="btn btn-icon icon-left btn-danger" data-toggle="tooltip"  data-placement="top" title="Hapus"><i class="fas fa-times"></i></a>
                          <?php } ?>
                          <?php } else { ?>
                            <?php if($u->user_id == $id){ ?>
                          <a href="<?php echo base_url().'User/halaman_edit/'.$u->user_id ?>" class="btn btn-icon icon-left btn-primary" data-toggle="tooltip"  data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                            
                          <?php } ?>
                          <?php } ?>
                          
                          <?php } else{ ?>
                            <?php if($level == "1"){ ?>
                          <a href="<?php echo base_url().'User/halaman_edit/'.$u->user_id ?>" class="btn btn-icon icon-left btn-primary" data-toggle="tooltip"  data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                          <?php if($u->user_id !== $id){ ?>
                          <a href="<?php echo base_url().'User/delete_akun/'.$u->user_id ?>" class="btn btn-icon icon-left btn-danger" data-toggle="tooltip"  data-placement="top" title="Hapus"><i class="fas fa-times"></i></a>
                          <?php } ?>
                          <?php } else { ?>
                            <?php if($u->user_id == $id){ ?>
                          <a href="<?php echo base_url().'User/halaman_edit/'.$u->user_id ?>" class="btn btn-icon icon-left btn-primary" data-toggle="tooltip"  data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                          
                            <?php } ?>
                          <?php } ?>
                          <br><br><br>
                            <?php }?>
                        </td>
                      </tr>
                      <?php $i++ ?>
                      <?php } ?>
                    </tbody>
                  </div>
                  <tfoot style="background-color: white;">
                    <tr>
                      <th>No</th>
                      <th>Nama Admin</th>
                      <th>Role Admin</th>
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
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anda yakin?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Data yang sudah dikonfirmasi tidak bisa diubah</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a id="btn-confirm" class="btn btn-warning" href="#">Konfirmasi</a>
          </div>
        </div>
      </div>
    </div>


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