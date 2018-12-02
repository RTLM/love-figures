<?php include 'app/partials/head.php'; ?>


<div class="hero">
    <div class="hero__image">
        <img src="app/dist/images/home-hero.png" class="img-fluid mx-auto" alt="Responsive image" style="width: 100%">        
    </div>
    <div class="hero__text">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Learn To Love Your Figures</h1>
                    <p>with Wiseup Bookkeeping</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home__mary container global__padding">
    <div class="row justify-content-md-center">
        <div class="text-center col-md-4">
            <div class="home__headshot">
                <img src="app/dist/images/home-mary.jpg" class="home__headshot__img" alt="Mary">
            </div>
            <img src="app/dist/images/bas.png" class="home__bas__img" alt="BAS Logo">
        </div>
        <div class="col-md-8 align-self-center">
            <div class="">
                <p class="quote">“I’ve been helping businesses take control of their books for over 25 years”</p>
                <div class="quote__row">
                    <div class="quote__author">
                        <p class="quote__author__name">Mary Brock</p>
                        <p class="quote__author__role">Director & BAS Agent</p>
                    </div>
                    <a class="quote-button button--purple" href="/about-us">Learn more about our team</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container global__padding">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div>
                <h2 class="color--purple">Personalised Approach</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div>
                <h2 class="color--purple">Meaningful Reporting</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div>
                <h2 class="color--purple">Informed Decision Making</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>
</div>

<div class="container global__padding">
    <div class="tiles">
        <?php
            component_tile('Business Consulting & Analysis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'pink', 'target-center-2');

            component_tile('Virtual Bookkeeping & BAS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dark-pink', 'package');

            component_tile('Virtual CFO & COO', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'purple', 'binocular');

            component_tile('Virtual Administrative Support', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'light-blue', 'speech-person');

            component_tile('Integrations Analysis & Implementation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'blue', 'cog');

            component_tile('Financial Reporting & Analysis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dark-blue', 'analytics-graph-bar');
        ?>
    </div>
</div>

<div class="cta cta--blue">
    <div class="container">
        <div class="row align-items-center">
            <div class="cta__heading col-md-8">
                Our packages start from just $249 per month
            </div>
            <div class="col-md-4">
                <a class="cta__button" href="/packages">View Here</a>
            </div>
        </div>
    </div>
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

<div class="testimonial container">
    <div class="testimonial__row row">
        <?php component_testimonial(
            "Whatever the size of your business, Mary provides that personal touch ensuring you are receiving both the very best information and service you require. Mary's professionalism is second to none and her ability to listen to and understand any concerns or issues you may have is a true gift. I strongly recommend you use Mary and Wiseup to take care of your bookkeeping needs as the reward is absolute peace of mind that your business is in excellent hands.",
            "Michelle",
            "HRBear",
            "testimonial-hr-bear.jpg"
            ) 
        ?>
        <?php component_testimonial(
            "I have been using Mary at Wiseup for coming up to 10 years now for our real estate business. When I first purchased the business, I had zero understanding of the financial side of running a business. I honestly believe without Mary I would have got myself into strife.

                Mary took control of my finances, allowing me to focus on the day to day running of the business. Mary is constantly looking for better ways and always trying to streamline our business to be more productive and cost efficient. I have no hesitation in recommending Mary and Wiseup.",
            "Dale",
            "First National Burleigh",
            "testimonial-first-national.jpg"
            ) 
        ?>
        <?php component_testimonial(
            "Despite thinking that I ‘knew’ what I was doing, when Mary got her hands on my MYOB accounting system, I was in for a few surprises! Thankfully the process of transforming my accounts from the ‘dark ages’ to bring it into the 21st Century is now a distant memory. With her skill and know-how, we set up what is now a really user-friendly process that means my accounts and banking are always up-to-date with least effort on my part.

                If I could duplicate Mary for other aspects of my business administration I’d be delighted. She is trustworthy, competent and delivers quality service with a smile, three big pluses in today’s world.",
            "Diane",
            "Positive Relating",
            "testimonial-positive-relating.jpg"
            ) 
        ?>
    </div>
</div>

<?php

include 'app/partials/cta.php';
include 'app/partials/footer.php';

?>