<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>The Drip Selector</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
            crossorigin="anonymous" />

        <!-- font awesome css -->
        <!-- <script src="https://kit.fontawesome.com/e4b7cacf78.js" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="main.css" />
        <link rel="stylesheet" type="text/css" href="slick/slick.css" />
        <!-- Add the new slick-theme.css if you want the default styling -->
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    </head>
    <title>Document</title>
</head> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, omnis doloremque similique numquam distinctio
ullam. Placeat odit aliquid at, eaque delectus recusandae nulla, consectetur iure assumenda perferendis iste! Soluta,
ea.

<body>
    <?php echo '<div class="bg-danger">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, omnis doloremque similique numquam distinctio
ullam. Placeat odit aliquid at, eaque delectus recusandae nulla, consectetur iure assumenda perferendis iste! Soluta,
ea.</div>'; ?>
    <div class="container mt-5">
        <div class="responsive">
            <div class="bg-danger"><img src="Images/IMG_3430.PNG" height="100px" alt=""></div>
            <div class="bg-danger"><img src="Images/IMG_3430.PNG" height="100px" alt=""></div>
            <div class="bg-danger"><img src="Images/IMG_3430.PNG" height="100px" alt=""></div>
            <div class="bg-danger"><img src="Images/IMG_3430.PNG" height="100px" alt=""></div>
            <div class="bg-danger"><img src="Images/IMG_3430.PNG" height="100px" alt=""></div>
            <div class="bg-danger"><img src="Images/IMG_3430.PNG" height="100px" alt=""></div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <!-- slick -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous"></script> -->

    <!-- // slick -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.js"></script>
    <script>
    $('.responsive').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    </script>


</body>

</html>