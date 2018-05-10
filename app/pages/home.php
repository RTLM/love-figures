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
        <a href="/packages" class="home__services__service col-sm-4">
            Virtual Bookkeping and BAS
        </a>
        <a href="/packages" class="home__services__service col-sm-4">
            Business Consulting & Analysis
        </a>
    </div>
    <div class="row justify-content-md-center text-center">
        <a href="packages" class="home__services__service col-sm-4">
            Virtual CFO & COO
        </a>
        <a href="/packages" class="home__services__service col-sm-4">
            Virtual Administrative Support
        </a>
    </div>
    <div class="row justify-content-md-center text-center">
        <a href="/packages" class="home__services__service col-sm-4">
            Integrations Analysis & Implementation
        </a>
        <a href="/packages" class="home__services__service col-sm-4">
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

<div id="testimonialsCarousel" class="testimonials carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#testimonialsCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#testimonialsCarousel" data-slide-to="1"></li>
        <li data-target="#testimonialsCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="background-color:#f1f1f1;">
        <div class="carousel-item active">
            <?php component_testimonial(
                "Whatever the size of your business, Mary provides that personal touch ensuring you are receiving both the very best information and service you require. Mary's professionalism is second to none and her ability to listen to and understand any concerns or issues you may have is a true gift. I strongly recommend you use Mary and Wiseup to take care of your bookkeeping needs as the reward is absolute peace of mind that your business is in excellent hands.",
                "Michelle from HRBear"
                ) 
            ?>
        </div>
        <div class="carousel-item">
            <?php component_testimonial(
                "I have been using Mary at Wiseup for coming up to 10 years now for our real estate business. When I first purchased the business, I had zero understanding of the financial side of running a business. I honestly believe without Mary I would have got myself into strife.
 
                    Mary took control of my finances, allowing me to focus on the day to day running of the business. Mary is constantly looking for better ways and always trying to streamline our business to be more productive and cost efficient. I have no hesitation in recommending Mary and Wiseup.",
                "Dale from the First National Burleigh"
                ) 
            ?>
        </div>
        <div class="carousel-item">
            <?php component_testimonial(
                "Despite thinking that I ‘knew’ what I was doing, when Mary got her hands on my MYOB accounting system, I was in for a few surprises! Thankfully the process of transforming my accounts from the ‘dark ages’ to bring it into the 21st Century is now a distant memory. With her skill and know-how, we set up what is now a really user-friendly process that means my accounts and banking are always up-to-date with least effort on my part.

                    If I could duplicate Mary for other aspects of my business administration I’d be delighted. She is trustworthy, competent and delivers quality service with a smile, three big pluses in today’s world.",
                "Diane from Positive Relating"
                ) 
            ?>
        </div>
    </div>
    <a class="carousel-control-prev" href="#testimonialsCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#testimonialsCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?php include 'app/partials/contact.php'; ?>
<?php include 'app/partials/footer.php'; ?>