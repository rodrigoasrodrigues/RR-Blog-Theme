<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        window.addEventListener('load', function () {
            new Glider(document.querySelector('.glider'), {
                slidesToShow: 1,
                dots: '#home-glider-dots',
                draggable: true,
                scrollLock: true,
                dragVelocity: 2,
                arrows: {
                    prev: '.glider-prev',
                    next: '.glider-next'
                }

            })
        });
    </script>
    <?php wp_head(); ?>
</head>

<body>

<header>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <span>Logo</span>
                <nav aria-label="Main Menu" class="main-menu">
                    <a href="" class="main-menu-item">asdf</a>
                    <a href="" class="main-menu-item">wer</a>
                    <a href="" class="main-menu-item">sdf</a>
                    <a href="" class="main-menu-item">ssss</a>
                </nav>
                <nav aria-label="Social Links" class="social-links">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    <i class="fa-brands fa-youtube"></i>

                </nav>
            </div>
        </div>
    </header>
