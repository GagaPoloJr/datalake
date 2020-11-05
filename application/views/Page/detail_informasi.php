<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url() . '../bemundip/assets/modules/bootstrap/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . '../bemundip/assets/modules/fontawesome/css/all.min.css' ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . '../bemundip/assets/css/components.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/template_landing.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/artikel.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/informasi.css' ?>">


    <style>
        p img {
            max-width: 100%;
        }

        body {
            background-color: #fafdfb;

        }

        figure img {
            max-width: 100%;
            height: 100%;
        }

        .page-footer {
            color: black;
        }

        .btn {
            background-color: #ff8100 !important;
            box-shadow: 0 2px 6px #ff8100;
            border-color: #ff8100;
        }

        .btn:hover {
            background-color: #ff8721 !important;
            border-color: #ff8100;


        }
    </style>

    <!-- Bootstrap CSS -->

    <title><?php echo  $post['title']; ?></title>
</head>


<body>
    <?php $this->load->view("landingpage/template/loading"); ?>

    <?php $this->load->view("landingpage/template/navbar-page"); ?>


    <section class="content-utama">
        <div id="detail-artikel" class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-7 post-outer">
                    <h1 id="header-article" class="text-center"><?= $post['title']; ?></h1>
                    <br>
                    <p>oleh <b><?php echo $post['name']; ?></b> <span> <br> <?php echo format_indo($post['date_created']);  ?> </span> </p>
                    <hr>
                    <?php if ($post['status'] == "no") : ?>
                        <p class='badge badge-warning'>Data sedang di proses </p>
                    <?php else : ?>
                        <p class='badge badge-success'>Data sudah di proses</p>

                    <?php endif ?>
                    <p><?= $post['content']; ?></p>

                    <img style="max-width: 100%;" src="<?php echo base_url() . '../bemundip/assets/images/' . $post['thumbnail']; ?>" alt="">
                    <p><?= $post['content']; ?></p>
                    <?php if ($post['pdf'] !== "") { ?>
                        <?php $link = $post['pdf']  ?>
                        <?php $str = $post['pdf']  ?>
                        <?php $str = chop($str, "/view?usp=sharing") ?>
                        <div class="embed-responsive embed-responsive-1by1">
                            <iframe class="embed-responsive-item" src="<?= $str; ?>/preview" type="application/pdf" allowfullscreen></iframe>
                        </div>
                        <br>
                        <button id="linkpdf" class="btn btn-primary">Download PDF</button>
                    <?php } ?>
                </div>
                <div class="col-sm-12 col-lg-4 post-right">
                    <div class="col-12">
                        <h3 style="color: #2a3e52; margin-bottom:20px" class="text-center">Kumpulan Informasi</h3>
                    </div>
                    <?php if (empty($right_post)) { ?>
                        <h3 data-aos="fade-up" id="empty-berita" class="badge badge-info">Buletin belum ada</h3>
                    <?php } else {
                    ?>
                        <?php foreach ($right_post as $info) { ?>

                            <div class="card">

                                <div data-aos="fade-left" class="galeri-artikel">
                                    <img id="gambar-artikel" class="img-fluid" src="<?php echo base_url() . '../bemundip/assets/images/' . $info->thumbnail ?>" alt="">
                                    <div class="overlay-title">
                                        <a href="<?php echo base_url() . 'page/detail_info/' . $info->slug_title ?>">
                                            <h4 class="judul-info" data-aos="fade-right"><?php echo word_limiter($info->title, 3) ?></h4>
                                            <p><?php echo format_indo($info->date_created) ?></p>
                                            <h5 data-aos="fade-right" class="badge badge-info">Lihat Selengkapnya</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if (!empty($right_post)) { ?>
                            <a style=" margin-bottom:20px" href="<?php echo base_url() . 'page/informasi' ?>" class="btn btn-primary text-center">Lihat Semua</a>
                        <?php } ?>
                    <?php } ?>

                </div>



            </div>
        </div>
        </div>
    </section>


    <?php $this->load->view("landingpage/template/footer-page"); ?>


    <!-- General JS Scripts -->
    <?php $this->load->view('Admin/_partial/js') ?>

    <!-- Optional JavaScript -->

    <script>
        $(document).ready(function() {
            $('#linkpdf').on('click', function() {
                window.open("<?= $link ?>")
                // console.log("HALO")
                return false;
            });
        });


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
</body>

</html>