<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/bootstrap/css/bootstrap.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/fontawesome/css/all.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/aos/aos.css' ?>">

  <!-- Template CSS -->
  <!-- <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>"> -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/components.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/template_landing.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/artikel.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/tentang.css' ?>">




  <!-- Bootstrap CSS -->

  <title><?php echo $title ?></title>
</head>

<body>
  <?php $this->load->view("landingpage/template/loading"); ?>

  <?php $this->load->view("landingpage/template/navbar-page"); ?>

  <section  data-aos="fade-down" class="content-utama">
    <div class="container">
      <div class="row ">
        <div class="col-12">
          <div id="article-utama" class="card ">
            <div id="card-header-utama" class="card-header text-sm-center">
              <h3>Berita Terbaru !</h3>
            </div>
            <?php foreach ($utama as $tampil) { ?>
              <article class="article">
                <div class="article-header">
                  <div id="image-utama" class="article-image" data-background="<?php echo base_url() . 'assets/images/' . $tampil->thumbnail ?>">
                  </div>
                  <div class="article-title">
                    <h2><a href="<?php echo base_url() . 'page/detail_artikel/' . $tampil->slug_title ?>"><?php echo $tampil->title ?></a></h2>
                  </div>
                </div>
                <div class="article-details">
                  <div class="article-cta">
                    <a href="<?php echo base_url() . 'page/detail_artikel/' . $tampil->slug_title ?>" id="tombol" class="btn btn-primary">Selengkapnya</a>
                  </div>
                  <br>
                  <p>oleh <b><?php echo $tampil->name; ?></b> <span style="float:right"> <?php echo format_indo($tampil->date_created) ?> </span> </p>

                </div>


              </article>
            <?php } ?>

          </div>
          <br>
          <div>

            <h4>Lihat Berdasarkan Kategori Artikel:</h4>
            <?php foreach ($kategori as $k) { ?>
              <a href="<?php echo base_url() . 'page/artikel_kategori/' . $k->id_kategori ?>" id="tombol" class="btn btn-primary"><?php echo $k->kategori ?></a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>



  <div class="main-content">
    <div class="section-body">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 id="header-article" class="text-center">Kumpulan Artikel BEM UNDIP</h1>
            <hr style="margin-bottom:50px;">
          </div>
          <?php if (empty($post)) : ?>
            <div class="alert alert-danger col-md-12" role="alert">
              Artikel belum ditemukan!
            </div>
          <?php endif; ?>
          <?php foreach ($post as $tampil) { ?>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

              <article  data-aos="fade-up" data-aos-easing="ease"  id="box-article" class="article">
                <div class="article-header">
                  <div class="article-image" data-background="<?php echo base_url() . 'assets/images/' . $tampil->thumbnail ?>">
                  </div>
                  <div class="article-title">
                    <h2><a href="<?php echo base_url() . 'page/detail_artikel/' . $tampil->slug_title ?>"><?php echo  word_limiter($tampil->title, 6) ?></a></h2>
                  </div>
                </div>
                <div class="article-details">
                  <p> <?php echo word_limiter($tampil->content, 15) ?> </p>
                  <div class="article-cta">
                    <a href="<?php echo base_url() . 'page/detail_artikel/' . $tampil->slug_title ?>" id="tombol" class="btn btn-primary">Read More</a>
                  </div>
                  <p style="font-size: 10px; margin-top:20px; line-height:1.75em;">oleh <b style="color: rgba(22, 69, 112, 1) "><?php echo $tampil->name; ?></b> <br> <?php echo format_indo($tampil->date_created) ?> </p>

                </div>
              </article>

            </div>

          <?php  } ?>
         
        </div>
      </div>
    </div>
    <!-- Pager -->

  </div>
  <div class="clearfix">
    <?= $this->pagination->create_links(); ?>
  </div>
  <br><br><br>
  <?php $this->load->view("landingpage/template/formaspirasi"); ?>

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