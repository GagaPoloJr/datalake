<?php $this->load->view("landingpage/template/header-page"); ?>


<body>
    <?php $this->load->view("landingpage/template/loading"); ?>

    <?php $this->load->view("landingpage/template/navbar-page"); ?>


    <section>
        <div class="jumbotron jumbotron-fluid" id="header">
            <div class="container">
                <br><br><br>
                <div class="row ">

                    <div class="col-md-6 col-sm-12" style="padding-top: 90px;">
                        <h1 class="animate__animated animate__fadeInLeft animate__delay-1s">DATALAKE BEM UNDIP 2020</h1>
                        <p class="animate__animated animate__fadeInLeft animate__delay-2s" style="color: #daab43;"> <i>“PEMRAKARSA MAHAKARYA”</i> </p>
                        <!-- <h1>PEMRAKARSA MAHAKARYA</h2> -->
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <img class="animate__animated animate__fadeInRight animate__delay-1s" id="logo-bem" src="<?php echo base_url() . 'assets/img/databemundip.png' ?>" alt="logo-bem-u-2020" style="width: 50%;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="wrapper-box">
        <div id="wrapper-box" class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <a target="_blank" href="<?php echo base_url() . 'page/list_buletin' ?>">
                        <i class="fas fa-newspaper fa-4x" style="color:#ff8100;"></i>
                    </a>
                    <h3>Buletin</h3>
                    <h4><?php echo $count_buletin['total_b']; ?></h4>
                </div>
                <div class="col-md-6">
                    <a target="_blank" href="<?php echo base_url() . 'page/informasi' ?>">
                        <i class="fas fa-info-circle fa-4x" style="color:#ff8100;"></i>

                    </a>

                    <h3>Informasi</h3>
                    <h4><?php echo $count_informasi['total_in']; ?></h4>

                </div>

            </div>

        </div>
    </div>
    <!-- <h1 data-aos="fade-up"  id="judul-berita" class="text-center">Berita Terkini Buat Kalian</h1> -->
    <br><br><br>
    <div class="undipangka">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 style="color: white;font-weight: 900; text-transform:uppercase; margin-bottom: 40px">universitas diponegoro</h2>
                </div>
                <div class="col-md-4">
                    <h4>Fakultas</h4>
                    <h1><?php echo $counting['fakultas'] ?></h1>
                </div>
                <div class="col-md-4">
                    <h4>Program Studi</h4>
                    <h1><?php echo $counting['program_studi'] ?></h1>
                </div>
                <div class="col-md-4">
                    <h4>Mahasiswa</h4>
                    <h1><?php echo $counting['mahasiswa'] ?></h1>
                </div>
                <div class="col-md-4">
                    <h4>Dosen</h4>
                    <h1><?php echo $counting['dosen'] ?></h1>
                </div>
                <div class="col-md-4">
                    <h4>UKM</h4>
                    <h1><?php echo $counting['ukm'] ?></h1>
                </div>
                <div class="col-md-4">
                    <h4>Prodi S1</h4>
                    <h1><?php echo $counting['prodi_s1'] ?></h1>
                </div>
                <div class="col-md-4">
                    <h4>Prodi S2</h4>
                    <h1><?php echo $counting['prodi_s2'] ?></h1>
                </div>
                <div class="col-md-4">
                    <h4>Prodi D4</h4>
                    <h1><?php echo $counting['prodi_d4'] ?></h1>
                </div>
                <div class="col-md-4">
                    <h4>Prodi PSDKU</h4>
                    <h1><?php echo $counting['prodi_psdku'] ?></h1>
                </div>
                <div class="col-md-4">
                    <h4>Himpunan</h4>
                    <h1><?php echo $counting['himpunan'] ?></h1>
                </div>

            </div>
        </div>
    </div>
    <br><br><br>
    <section class="informasi-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="about-title">Informasi Terkini</h2>
                </div>
                <?php foreach ($informasi as $info) : ?>

                    <div id="card-info" class="col-md-6">
                        <div class="card">
                            <img class="card-img-top" width="100" height="80" class="mr-3" src="<?php echo base_url() . '../bemundip/assets/images/' . $info->thumbnail; ?>" alt="Generic placeholder image">

                            <div class="card-body">
                                <h4 class="card-title"><?php echo $info->title ?></h4>
                                <?php if ($info->status == "no") : ?>
                                    <h6 class="badge badge-warning card-subtitle mb-2 ">Data Sedang Di proses</h6>
                                <?php else : ?>
                                    <h6 class="badge badge-success card-subtitle mb-2 ">Data Selesai Di proses</h6>
                                <?php endif ?>
                                <p><?php echo format_indo($info->date_created) ?></p>
                                <p class="card-text"><?php echo word_limiter($info->content, 5) ?></p>
                                <a class="btn btn-info" href="<?php echo base_url() . 'page/detail_info/' . $info->slug_title ?>" class="card-link">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-lg-12  text-center">
                    <a class="btn btn-info" href="<?php echo base_url() . 'page/informasi' ?>">Lihat Semua</a>
                </div>
            </div>
        </div>
    </section>
    <section class="artikel-area">
        <div class="col-12">
            <!-- <p class="btn btn-danger">Buletin</p> -->
            <h2 style="color: #2a3e52;" class="text-center">Buletin Terbaru!</h2>
        </div>
        <div class="row">
            <?php if (empty($terbaru)) { ?>
                <h3 data-aos="fade-up" id="empty-berita" class="badge badge-info">Buletin belum ada</h3>
            <?php } else {
            ?>
                <?php foreach ($terbaru as $t) { ?>
                    <div data-aos="fade-left" class="galeri-artikel col-md-4">
                        <img id="gambar-artikel" class="img-fluid" src="<?php echo base_url() . '../bemundip/assets/images/' . $t->thumbnail ?>" alt="">
                        <div class="overlay-title">
                            <a href="<?php echo base_url() . 'page/detail_buletin/' . $t->slug_title ?>">
                                <h4 data-aos="fade-right"><?php echo word_limiter($t->title, 5) ?></h4>
                                <h5 data-aos="fade-right" class="badge badge-info">Lihat Selengkapnya</h5>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
            <div class="col-lg-12  text-center">
                <a style="margin: 20px 0;" class="btn btn-info" href="<?php echo base_url() . 'page/list_buletin' ?>">Lihat Semua</a>
            </div>
        </div>
    </section>
    <br><br>
    <section class="about-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="about-title">Apa Itu Datalake BEM Undip?</h2>
                </div>
                <div class="col-md-12 text-center">
                    <p>Data Lake merupakan sebuah portal penghimpun data / database di lingkup Undip yang dapat diakses publik serta wadah publikasi hasil survei maupun infografis berbasis data yang dilakukan dan diolah oleh Biro Statistik BEM Undip.</p>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view("landingpage/template/footer-page"); ?>



    <!-- Optional JavaScript -->


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() . 'assets/js/jquery.timeago.js' ?>"></script>
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
        jQuery(document).ready(function() {
            jQuery("time.timeago").timeago();
        });
    </script>





</body>

</html>