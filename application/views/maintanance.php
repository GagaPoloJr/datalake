<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/tentang.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/template_landing.css' ?>">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <title>Maintanance Page</title>
</head>

<body>

<?php $this->load->view("landingpage/template/navbar-page"); ?>


    <section class="perbaikan">
        <br><br><br><br><br><br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="judul-perbaikan">MAAF:(</h1>
                </div>
                <div class="col-12">
                    <h1 class="judul-perbaikan">HALAMAN INI SEDANG DALAM PERBAIKAN ATAU PENGEMBANGAN</h1>
                </div>
                <div class="col-12">
                    <a id="button-perbaikan" style="border-radius: 30px;" class="btn btn-danger" href="<?php echo base_url() ?>">Kembali ke Halaman Utama</a>
                </div>



            </div>
            <br><br><br>

        </div>
    </section>


    <?php $this->load->view("landingpage/template/footer-page"); ?>
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $(window).scroll(function() {
            $('nav').toggleClass('shrink', $(this).scrollTop() > 200);
        });
    </script>

</body>

</html>