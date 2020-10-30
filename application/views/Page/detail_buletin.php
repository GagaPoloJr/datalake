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
    <!-- <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>"> -->
    <link rel="stylesheet" href="<?php echo base_url() . '../bemundip/assets/css/components.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/template_landing.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css-custom/artikel.css' ?>">

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

        .page-footer{
            color: black;
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

                    <img style="max-width: 100%;" src="<?php echo base_url() . '../bemundip/assets/images/' . $post['thumbnail']; ?>" alt="">
                    <p><?= $post['content']; ?></p>
                </div>
                <div class="col-sm-12 col-lg-4 post-right">
                    <div class="card">
                        <div class="card-header">
                            <h4 id="header-h4">Artikel Terbaru !</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <?php if(empty($right_post)) { 
                                    echo "Artikel Belum Tersedia"; 
                                }
                                    else { ?>
                                    
                                <?php foreach ($right_post as $rp) { ?>
                                    <a id="link-artikel" href="<?php echo base_url() . 'page/detail_buletin/' . $rp->slug_title ?>">
                                        <li class="media">
                                            <img width="100" height="80" class="mr-3" src="<?php echo base_url() . '../bemundip/assets/images/' . $rp->thumbnail; ?>" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 id="right-header" class="mt-0 mb-1"><?= word_limiter($rp->title, 5); ?></h5>
                                                <p><?= word_limiter($rp->content, 20); ?></p>
                                                <p style="font-size: 12px;">oleh <b><?php echo $rp->name; ?></b> <span> <br> <?php echo format_indo($rp->date_created) ?> </span> </p>
                                                <hr>
                                            </div>

                                        </li>
                                    </a>
                                <?php } ?>
                                <?php } ?>

                            </ul>
                        </div>
                        <?php if(!empty($right_post)) { ?>
                         <a href="<?php echo base_url() . 'page/list_buletin' ?>" class="btn btn-primary">View More</a>
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