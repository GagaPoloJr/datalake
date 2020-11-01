<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome icons (free version)-->
    <meta name="description" content="Website Badan Eksekutif Mahasiswa (BEM) Universitas Diponegoro. Penyampaian informasi, aspirasi, opini pribadi, kritik, saran, dan usul dapat dikirimkan melalui fasilitas pesan di akun ini dengan tetap menjunjung tinggi etika berbahasa. Kami tunggu partisipasi aktif Kawan-kawan!.">
    <link rel="icon" type="image/png" href="<?php echo base_url() . 'assets/img/bemundip.png' ?>" sizes="96x96">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . '../bemundip/assets/modules/fontawesome/css/all.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . '../bemundip/assets/modules/aos/aos.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . '../bemundip/assets/modules/bootstrap/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/tentang.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/template_landing.css' ?>">
    <style>
        html {
            scroll-behavior: smooth;
            transition: all .5s;
        }

        body {
            color: #6c757d;
        }
        .card{
    box-shadow: 0 4px 8px rgba(204, 204, 204, 0.75);

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
        <div class="container">
            <div style="color: white;" class="row align-items-center">
                <div data-aos="fade-up" class="col-12  text-center">
                    <h1 class="font-tebal">DATABASE BEM UNDIP 2020</h1>
                    <p class="lead">Kabinet Pemrakarsa Mahakarya</p>
                    <p class="font-weight-light">“Karyakan Rasa, Karsakan Karya”</p>
                </div>
                <br><br><br>
            </div>

        </div>
    </header>
    <br><br>
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h4>Tabel Database</h4>
                </div>
                <div class="card-body">
                    <p>Update terakhir <?php echo format_indo($counting['date_updated']); ?></p>

                    <table style="width: 100%;" id="table-artikel" class="table table-bordered table-striped">
                        <thead style="background-color: white;">
                            <tr>
                                <th>Kategori</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <style>
                            tbody.belang tr:nth-child(even) {
                                background-color: white;
                            }
                        </style>
                        <div>
                            <tbody class="belang">

                                <tr>
                                    <td>Fakultas</td>
                                    <td><?php echo $counting['fakultas']; ?></td>

                                </tr>
                                <tr>
                                    <td>Program Studi</td>
                                    <td><?php echo $counting['program_studi']; ?></td>

                                </tr>
                                <tr>
                                    <td>Mahasiswa</td>
                                    <td><?php echo $counting['mahasiswa']; ?></td>

                                </tr>
                                <tr>
                                    <td>Dosen</td>
                                    <td><?php echo $counting['dosen']; ?></td>

                                </tr>
                                <tr>
                                    <td>Unit Kegiatan Mahasiswa (UKM)</td>
                                    <td><?php echo $counting['ukm']; ?></td>

                                </tr>
                                <tr>
                                    <td>Program Studi S1</td>
                                    <td><?php echo $counting['prodi_s1']; ?></td>

                                </tr>
                                <tr>
                                    <td>Program Studi S2</td>
                                    <td><?php echo $counting['prodi_s2']; ?></td>

                                </tr>
                                <tr>
                                    <td>Program Studi D4</td>
                                    <td><?php echo $counting['prodi_d4']; ?></td>

                                </tr>
                                <tr>
                                    <td>Program Studi PSDKU</td>
                                    <td><?php echo $counting['prodi_psdku']; ?></td>

                                </tr>
                                <tr>
                                    <td>Himpunan</td>
                                    <td><?php echo $counting['himpunan']; ?></td>

                                </tr>
                            </tbody>
                        </div>
                        <tfoot style="background-color: white;">
                            <tr>
                                <th>Kategori</th>
                                <th>Total</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>










    <?php $this->load->view("landingpage/template/footer-page"); ?>
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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