<?php include 'app/partials/head.php'; ?>


<div class="banner__home">
    <?php component_banner("<span class='banner__home__title'>Learn To Love Your Figures</span><br><span class='banner__home__subtitle'>with Wiseup", "home-hero.png") ?>
</div>

<div class="home__mary container global__padding">
    <div class="text-center row justify-content-md-center">
        <div class="col-md-8">
            <h2>"I've been helping businesses take control of their books for over 20 years"</h2>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="text-center col-md-4">
            <div class="home__headshot">
                <img src="assets/img/home-mary.JPG" class="home__headshot__img" alt="Mary">
            </div>
        </div>
        <div class="col-md-4 align-self-center">
            <ul class="home__features-list list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span><i class="fas fa-users"></i></span>
                    Personalised Approach
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span><i class="fas fa-book"></i></span>
                    BAS & Bookkeeping Specialist
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span><i class="fas fa-chart-line"></i></span>
                    Meaningful reporting
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span><i class="fas fa-hand-holding-usd"></i></span>
                    Informed decision making
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="home__services container global__padding">
    <div class="text-center">
        <h1>Our Services</h1>
    </div>
    <div class="row justify-content-md-center text-center">
        <a href="packages.php" class="home__services__service col-sm-4">
            Virtual Bookkeping and BAS
        </a>
        <a href="packages.php" class="home__services__service col-sm-4">
            Business Consulting & Analysis
        </a>
    </div>
    <div class="row justify-content-md-center text-center">
        <a href="packages.php" class="home__services__service col-sm-4">
            Virtual CFO & COO
        </a>
        <a href="packages.php" class="home__services__service col-sm-4">
            Virtual Administrative Support
        </a>
    </div>
    <div class="row justify-content-md-center text-center">
        <a href="packages.php" class="home__services__service col-sm-4">
            Integrations Analysis & Implementation
        </a>
        <a href="packages.php" class="home__services__service col-sm-4">
            Financial Reporting & Analysis
        </a>
    </div>
</div>

<div class="banner__home__packages">
    <?php component_banner("Packages starting from $249<br><a href='packages.php'>View Here</a>", "home-packages.png") ?>
</div>

<div class="container global__padding">
    <div class="text-center">
        <h1>Partnered with</h1>
    </div>
    <div class="row justify-content-md-center text-center" style="margin-bottom: 2rem">
        <div class="col-sm-2">
            <img src="assets/img/logo-xero.png" class="home__logo" alt="XERO">
        </div>
        <div class="col-sm-2">
            <img src="assets/img/logo-myob.png" class="home__logo" alt="MYOB">
        </div>
        <div class="col-sm-2">
            <img src="assets/img/logo-receiptbank.png" class="home__logo" alt="Receipt-Bank">
        </div>
    </div>
    <div class="row justify-content-md-center text-center" style="margin-bottom: 2rem">
        <div class="col-sm-2">
            <img src="assets/img/logo-cloudpayroll.png" class="home__logo" alt="Cloud Payroll">
        </div>
        <div class="col-sm-2">
            <img src="assets/img/logo-hubdoc.png" class="home__logo" alt="Hubdoc">
        </div>
        <div class="col-sm-2">
            <img src="assets/img/logo-futrli.png" class="home__logo" alt="Futrli">
        </div>
    </div>
</div>

<div id="carouselExampleIndicators" class="testimonials carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="background-color:#f1f1f1;">
        <div class="row justify-content-sm-center text-center carousel-item active">
            <div class="col-sm-8 padding">
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut enim sit amet tellus eleifend pellentesque. Curabitur eget lacus at erat cursus tristique. Etiam lorem nisi, auctor non eleifend in, ultricies id urna. In ut elit tortor. Proin venenatis quis sapien nec posuere. Nullam malesuada eget orci sed molestie.""
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="col-sm-8 padding">
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut enim sit amet tellus eleifend pellentesque. Curabitur eget lacus at erat cursus tristique. Etiam lorem nisi, auctor non eleifend in, ultricies id urna. In ut elit tortor. Proin venenatis quis sapien nec posuere. Nullam malesuada eget orci sed molestie.""
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="col-sm-8 padding">
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut enim sit amet tellus eleifend pellentesque. Curabitur eget lacus at erat cursus tristique. Etiam lorem nisi, auctor non eleifend in, ultricies id urna. In ut elit tortor. Proin venenatis quis sapien nec posuere. Nullam malesuada eget orci sed molestie.""
                </p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?php include 'app/partials/contact.php'; ?>
<?php include 'app/partials/footer.php'; ?>