<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Forms &rsaquo; Editor &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/bootstrap/css/bootstrap.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/fontawesome/css/all.min.css' ?>">


  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/summernote/summernote-bs4.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/codemirror/lib/codemirror.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/codemirror/theme/duotone-dark.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/jquery-selectric/selectric.css' ?>">


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
            <h1>Tambah Artikel</h1>
            
          </div>

          <div class="section-body">
            <h2 class="section-title">Editor</h2>
            <p class="section-lead">WYSIWYG editor and code editor.</p>

            <div class="row">
              <div class="col-12">
              <form action="<?php echo site_url('Admin/save');?>" method="post">
                <div class="card">
                  <div class="card-header">
                    <h4>Full Summernote</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="title">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric">
                          <option>Tech</option>
                          <option>News</option>
                          <option>Political</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea id="summernote" class="summernote" name="content"></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Publish</button>
                      </div>
                    </div>
                  </div>
                </div>
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

  <!-- JS Libraies -->
  <!-- <script src="assets/modules/summernote/summernote-bs4.js"></script>
  <script src="assets/modules/codemirror/lib/codemirror.js"></script>
  <script src="assets/modules/codemirror/mode/javascript/javascript.js"></script>
  <script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script> -->

  <script src="<?php echo base_url() . 'assets/modules/summernote/summernote-bs4.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/modules/codemirror/lib/codemirror.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/modules/codemirror/mode/javascript/javascript.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/modules/jquery-selectric/jquery.selectric.min.js' ?>"></script>

  <!-- Page Specific JS File -->

  <!-- Template JS File -->


  <script src="<?php echo base_url() . 'assets/js/scripts.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/js/custom.js' ?>"></script>

  <script> 
$(document).ready(function(){
            $('#summernote').summernote({
                height: "300px",
                callbacks: {
                    onImageUpload: function(image) {
                        uploadImage(image[0]);
                    },
                    onMediaDelete : function(target) {
                        deleteImage(target[0].src);
                    }
                }
            });
 
            function uploadImage(image) {
                var data = new FormData();
                data.append("image", image);
                $.ajax({
                    url: "<?php echo site_url('Admin/upload_image')?>",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: "POST",
                    success: function(url) {
                      console.log(url);
                        $('#summernote').summernote("insertImage", url);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }
 
            function deleteImage(src) {
                $.ajax({
                    data: {src : src},
                    type: "POST",
                    url: "<?php echo site_url('Admin/delete_image')?>",
                    cache: false,
                    success: function(response) {
                        console.log(response);
                    }
                });
            }
 
        });

</script> 
</body>

</html>