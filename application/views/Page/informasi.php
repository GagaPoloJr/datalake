<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url() . '../bemundip/assets/modules/bootstrap/css/bootstrap.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . '../bemundip/assets/modules/fontawesome/css/all.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . '../bemundip/assets/modules/aos/aos.css' ?>">

  <!-- Template CSS -->
  <!-- <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>"> -->
  <link rel="stylesheet" href="<?php echo base_url() . '../bemundip/assets/css/components.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/template_landing.css' ?>">

  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/artikel.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/informasi.css' ?>">

  <style>
    h4.judul-info.aos-init.aos-animate {
    font-weight: 800;
}

  </style>



  <!-- Bootstrap CSS -->

  <title><?php echo $title ?></title>
</head>

<body>

  <?php $this->load->view("landingpage/template/navbar-page"); ?>

  <section  data-aos="fade-down" class="content-utama">
  <div class="col-12">
            <h2 style="color: #2a3e52;" class="text-center">Informasi Terbaru</h2>
            <br><br>
        </div>
  <div class="container">
        <div class="row">
            <?php if (empty($informasi)) { ?>
                <h3 data-aos="fade-up" id="empty-berita" class="badge badge-info">Buletin belum ada</h3>
            <?php } else {
            ?>
                <?php foreach ($informasi as $info) { ?>
                    <div data-aos="fade-left" class="galeri-artikel col-12">
                        <img id="gambar-artikel" class="img-fluid" src="<?php echo base_url() . '../bemundip/assets/images/' . $info->thumbnail ?>" alt="">
                        <div class="overlay-title color">
                            <a href="<?php echo base_url() . 'page/detail_info/' . $info->slug_title ?>">
                                <h4 class="judul-info" data-aos="fade-right"><?php echo word_limiter($info->title, 3) ?></h4>
                                <p><?php echo format_indo($info->date_created) ?></p>
                                <h5 style="font-size:21px" data-aos="fade-right" class="badge badge-success">Lihat Selengkapnya</h5>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
        </div>
  </section>

  <section class="artikel-area">
        <div class="col-12">
            <h2 style="color: #2a3e52;" class="text-center">Kumpulan Informasi</h2>
        </div>
        <div class="container">
        <div class="row">
            <?php if (empty($informasi_post)) { ?>
                <h3 data-aos="fade-up" id="empty-berita" class="badge badge-info">Buletin belum ada</h3>
            <?php } else {
            ?>
                <?php foreach ($informasi_post as $info) { ?>
                    <div data-aos="fade-left" class="galeri-artikel col-md-4">
                        <img id="gambar-artikel" class="img-fluid" src="<?php echo base_url() . '../bemundip/assets/images/' . $info->thumbnail ?>" alt="">
                        <div class="overlay-title">
                            <a href="<?php echo base_url() . 'page/detail_info/' . $info->slug_title ?>">
                                <h4 class="judul-info" data-aos="fade-right"><?php echo word_limiter($info->title, 3) ?></h4>
                                <p><?php echo format_indo($info->date_created) ?></p>
                                <h5 data-aos="fade-right" class="badge badge-info">Lihat Selengkapnya</h5>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
        </div>
    </section>

  <div class="clearfix">
    <?= $this->pagination->create_links(); ?>
  </div>
  <br><br><br>

  <div style="color: black;">
    <?php $this->load->view("landingpage/template/footer-page"); ?>
  </div>

  <!-- General JS Scripts -->
  <?php $this->load->view('Admin/_partial/js') ?>

  <!-- Optional JavaScript -->

  <script>
    $(window).scroll(function() {
      $('nav').toggleClass('shrink', $(this).scrollTop() > 0);
    });

    (function() {
      var documentElem = $(document),
        nav = $('nav'),

        lastScrollTop = 0;

      documentElem.on('scroll', function() {
        var currentScrollTop = $(this).scrollTop();
        nav.addClass('animating');
        // scroll down
        if (currentScrollTop > lastScrollTop) nav.addClass('hidden');
        // scrollTop
        else nav.removeClass('hidden animating bottom');

        lastScrollTop = currentScrollTop;
      });

    })();
  </script>

  <script src="<?php echo base_url() . 'assets/js/scripts.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/js/custom.js' ?>"></script>


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
</body>

</html>