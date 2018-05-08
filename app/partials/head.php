<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="app/styles/main.css">
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
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav">
                    <a href="/" class="navbar__logo"><img src="assets/img/logo.png"></a>
                    <?php foreach($navItems as $item) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo ($url . $item['url']) ?>"><?php echo $item['name'] ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>