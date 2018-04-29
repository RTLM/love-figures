<?php include 'app/partials/head.php'; ?>

<div class="banner__about-us">
    <?php component_banner("We’re passionate about empowering small business owners to make financial decisions with confidence to grow their business", "packages-hero.png"); ?>
</div>

<div class="container">
    <div class="row staff__row justify-content-sm-center">
        <?php component_staff('Mary Brock', 'Director', 'home-mary.jpg'); ?>
        <?php component_staff('Sue Green', 'Operations Manager', 'home-mary.jpg'); ?>
    </div>
    <div class="row staff__row justify-content-sm-center">
        <?php component_staff('Megan Keesse', 'VA Bookkeeping', 'home-mary.jpg'); ?>
        <?php component_staff('Alexa Ursula Conopio', 'VA Bookkeeping', 'home-mary.jpg'); ?>
    </div>
</div>


<?php

$icons = ['First National Real Estate', 'Just Cuts', 'Callister Media', 'HR Bear', 'Positive Relating'];

component_icon_grid("Clients we Service", $icons);

include 'app/partials/contact.php';

include 'app/partials/footer.php';

?>