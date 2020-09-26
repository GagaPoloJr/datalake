<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome icons (free version)-->
    <meta name="description" content="Website Badan Eksekutif Mahasiswa (BEM) Universitas Diponegoro. Penyampaian informasi, aspirasi, opini pribadi, kritik, saran, dan usul dapat dikirimkan melalui fasilitas pesan di akun ini dengan tetap menjunjung tinggi etika berbahasa. Kami tunggu partisipasi aktif Kawan-kawan!.">
    <link rel="icon" type="image/png" href="<?php echo base_url() . 'assets/img/bemundip.png' ?>" sizes="96x96">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/aos/aos.css' ?>">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/fontawesome/css/all.min.css' ?>">

    <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/bootstrap/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/tentang.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/template_landing.css' ?>">
    <style>
        html {
            scroll-behavior: smooth;
            transition: all .5s;
        }
    </style>
    <title><?php echo $title ?></title>
</head>

<body>
    <?php $this->load->view("landingpage/template/loading"); ?>


    <?php $this->load->view("landingpage/template/navbar-page"); ?>

    <!-- section nilai nilai -->
    <header class="masthead">
        <div class="masthead-overlay"></div>
        <div data-aos="fade-down" data-aos-offset="600" data-aos-delay="700" class="container">
            <div style="color: white;" class="row align-items-center">
                <div class="col-12  text-center">
                    <h1 class="font-tebal">PROFILE BEM UNDIP 2020</h1>
                    <p class="lead">Kabinet Pemrakarsa Mahakarya</p>
                    <p class="font-weight-light">“Karyakan Rasa, Karsakan Karya”</p>
                </div>
                <br><br><br>
            </div>
            <div id="button-id" class="row text-center">
                <div class="col-md-12">
                    <a id="button-logo" href="#struktur" class="btn btn-primary js-scroll-trigger">Lihat</a>
                </div>
            </div>
        </div>
    </header>
    <section id="struktur" class="struktur-bem">
        <div class="row text-center">
            <div class="col-12">
                <a href="<?php echo base_url() . 'assets/img/struktur/Bagan BEM.png' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                    <img class="img-fluid" style="width: 70%;" src="<?php echo base_url() . 'assets/img/struktur/Bagan BEM.png' ?>" alt="struktur-bem-undip-2020">
                </a>
            </div>
        </div>

        <div class="container">
            <div data-aos="fade-down" class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/ketuaBEM.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div alt="ketua-bem undip" style="background-image: url(<?php echo base_url() . 'assets/img/struktur/ketuaBEM.jpg' ?>);" class="image-bem">
                        </div>
                    </a>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/wakaBEM.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div alt="waktil ketua bem undip" style="background-image: url(<?php echo base_url() . 'assets/img/struktur/wakaBEM.jpg' ?>);" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/Inspektorat.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/Inspektorat.jpg' ?>);" alt="inspektorat" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/sekre-kab.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/sekre-kab.jpg' ?>);" alt="sekre kabinet" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/biro-sekre.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/biro-sekre.jpg' ?>);" alt="biro kesekretariatan" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/biro-Keuangan.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/biro-Keuangan.jpg' ?>);" alt="biro keuangan" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/biro-stat.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/biro-stat.jpg' ?>);" alt="biro statistika" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/kmi.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/kmi.jpg' ?>);" alt="kantor media informasi" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/Korbid-EPM.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/Korbid-EPM.jpg' ?>);" alt="edukasi dan pengembangan manusia" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/kormikat.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/kormikat.jpg' ?>);" alt="minat bakat dan kreasi" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/korbiddika.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/korbiddika.jpg' ?>);" alt="dinamika kampus" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/korbid-prp.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/korbid-prp.jpg' ?>);" alt="pergerakan dan relasi publik" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/riskel.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/riskel.jpg' ?>);" alt="riset dan keilmuan" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/kpsdm.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/kpsdm.jpg' ?>);" alt="kpsdm" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/seniora.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/seniora.jpg' ?>);" alt="seniora" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/ekotif.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/ekotif.jpg' ?>);" alt="ekotif" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/harkam.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/harkam.jpg' ?>);" alt="harkam" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/kesma.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/kesma.jpg' ?>);" alt="kesejahteraan mahasiswa" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/sospol.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery " data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/sospol.jpg' ?>);" alt="sospol" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/sosmas.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/sosmas.jpg' ?>);" alt="sosmas" class="image-bem">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="<?php echo base_url() . 'assets/img/struktur/kestra.jpg' ?>" data-toggle="lightbox" data-gallery="example-gallery" data-footer="*Klik sebelah kiri atau kanan jika ingin geser">
                        <div style="background-image: url(<?php echo base_url() . 'assets/img/struktur/kestra.jpg' ?>);" alt="kemitraan eksternal" class="image-bem">
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>


    <?php $this->load->view("landingpage/template/footer-page"); ?>
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
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

    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
</body>

</html>