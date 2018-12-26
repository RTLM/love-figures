<!doctype html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124459791-1"></script>
        <script src='https://www.google.com/recaptcha/api.js?render=6Lfdp38UAAAAAJUwvPlf-qC3Jfkvy7sN7SoAj6pQ'></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-124459791-1');
        </script>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="theme-color" content="#ffffff">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="app/dist/main.css">
        <?php include 'app/functions.php' ?>


        <title>Learn to Love Your Figures</title>
    </head>
    <body>
        <?php
            $url = "/love-figures";

            $navItems = [
                array(
                    "name"=>"Home",
                    "url"=>"/"
                ),
                array(
                    "name"=>"Packages",
                    "url"=>"/packages"
                ),
                array(
                    "name"=>"About Us",
                    "url"=>"/about-us"
                ),
                array(
                    "name"=>"Contact",
                    "url"=>"/contact-us"
                ),
            ];
        ?>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a href="/" class="navbar__logo"><img src="app/dist/images/logo.png"></a>
                <div class="navbar__contact-links">
                    <a href="tel:+61412-325-660" target="_blank"  class="navbar__phone-number"><i style="margin-right: 0.5rem;" class="fas fa-phone"></i>0412 325 660</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php foreach($navItems as $item) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ($item['url']) ?>"><?php echo $item['name'] ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>