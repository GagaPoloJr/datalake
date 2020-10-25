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
                        <p class="animate__animated animate__fadeInLeft animate__delay-2s" style="color: #daab43;"> <i>“Karyakan Rasa, Karsakan Karya”</i> </p>
                        <!-- <h1>PEMRAKARSA MAHAKARYA</h2> -->
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <img class="animate__animated animate__fadeInRight animate__delay-1s" id="logo-bem" src="<?php echo base_url() . 'assets/img/logo.png' ?>" alt="logo-bem-u-2020">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="wrapper-box">
        <div id="wrapper-box" class="container">
            <div class="row text-center">
                <div class="col-md-4">
                <a target="_blank" href="https://www.instagram.com/bemundip/">
                <i class="fa fa-info-circle" style="font-size:36px;"></i>
             </a>
                    
                    <h5>Info Survei</h5>
                </div>
                <div class="col-md-4">
                <a target="_blank" href="https://www.instagram.com/bemundip/">
                <i class="fa fa-info-circle" style="font-size:36px;"></i>

             </a>
                    
                    <h5>Info Survei</h5>
                </div>
                <div class="col-md-4">
                <a target="_blank" href="https://www.instagram.com/bemundip/">
                <i class="fa fa-info-circle" style="font-size:36px;"></i>

             </a>
                    
                    <h5>Info Survei</h5>
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
                    <h2 style="font-weight: 900; text-transform:uppercase; margin-bottom: 20px">Undip Dalam Angka</h2>
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
    <section class="artikel-area">
        <div class="col-12">
            <!-- <p class="btn btn-danger">Buletin</p> -->
            <h2 style="color: #2a3e52;" class="text-center">Buletin Terbaru!</h2>
        </div>
        <div class="row">
            <?php if (empty($terbaru)) { ?>
                <h3 data-aos="fade-up" id="empty-berita" class="badge badge-info">Yah Belum Ada Berita</h3>
            <?php } else {
            ?>
                <?php foreach ($terbaru as $t) { ?>
                    <div data-aos="fade-left" class="galeri-artikel col-md-4">
                        <img id="gambar-artikel" class="img-fluid" src="<?php echo base_url() . 'assets/images/' . $t->thumbnail ?>" alt="">
                        <div class="overlay-title">
                            <a href="<?php echo base_url() . 'page/detail_artikel/' . $t->slug_title ?>">
                                <h4 data-aos="fade-right"><?php echo word_limiter($t->title, 5) ?></h4>
                                <h5 data-aos="fade-right" class="badge badge-info">Lihat Selengkapnya</h5>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
    </section>
    <br><br>
    <!-- <section class="video-bem">
        <div data-aos="fade-up" data-aos-delay="50" data class="header-video">
            <h1 class="text-center" style="color: white; font-weight:700">ThrowBack</h1>
            <h4 class="text-center" style="color: white;">ODM UNDIP 2019</h4>
        </div>
        <div data-aos="fade-up" data-aos-delay="100" class="responsive-youtube">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/-uF7edaskYI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section> -->

    <!-- <div data-aos="slide-up" data-aos-offset="100" class="wave-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#daab43" fill-opacity="1" d="M0,32L48,32C96,32,192,32,288,58.7C384,85,480,139,576,138.7C672,139,768,85,864,74.7C960,64,1056,96,1152,122.7C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div> -->
    <!-- <section class="third-area">
        <?php $this->load->view("landingpage/template/formaspirasi"); ?>

    </section> -->
    <?php $this->load->view("landingpage/template/footer-page"); ?>



    <!-- Optional JavaScript -->


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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





</body>

</html>