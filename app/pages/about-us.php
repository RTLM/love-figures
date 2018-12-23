<?php include 'app/partials/head.php'; ?>

    <!-- <?php component_banner("We’re passionate about empowering small business owners to make financial decisions with confidence to grow their business", "banner-about-us.jpg"); ?> -->

<div class="banner banner--about-us">
    <div class="banner__text container">
        <h1>“We’re passionate about empowering business owners with the confidence to grow their business”</h1>
    </div>
    <div class="banner--overlay"></div>
</div>

<div class="container">
    <div class="staff__row">
        <?php 
            component_staff(
                'Mary Brock',
                'Director/BAS Agent',
                'wiseup-mary.jpg',
                'Mary Brock has over 25 years experience in Financial & Administrative Management. She is passionate about embracing change through education and innovation to provide the best service possible for her clients.<br><br>     
                Her skills lie in business planning, creative lateral & strategic thinking, team building, human resources, operations and financial management. Mary is a registered BAS agent with the Tax Practitioners Board, has a Bachelor of Arts in Management and Certificate IV in Financial Services & is a member of the Australian Bookkeepers Network.'
            ); 
        ?>
    </div>
    <div class="row staff__row staff__row--tiles">
        <?php 
            component_staff(
                'Sue Green',
                'Bookkeeping/Payables',
                'wiseup-sue.jpg'
            ); 
        ?>
        <?php
            component_staff(
                'Alexa Ursula Conopio',
                'VA/Bookkeeping/Receivables',
                'wiseup-alexa.jpg'
            ); 
        ?>
    </div>
</div>

<div class="quote-block">
    <div class="container">
        <div class="quote-block__heading">
            Our Mission
        </div>
        <div class="quote-block__body">
        “We value authenticity, trust & integrity. These drive our decision-making processes & underpin our commitment as your trusted advisory service for financial workflows, bookkeeping, payroll & financial reporting. Our Culture is based on an honest connection. We strive to fully understand your individual business needs and tailor our services to provide the best fit possible for you.“
        </div>
    </div>
</div>


<?php

$icons = ['First National Real Estate' => 'logo-first-national.png', 'Just Cuts' => 'logo-justcuts.png', 'HR Bear' => 'logo-hr-bear.png', 'Positive Relating' => 'logo-diane-viola.png'];

component_icon_grid("Who We've Helped", $icons);

?>

<div class="testimonial container">
    <div class="testimonial__row row">
        <?php component_testimonial(
            "Whatever the size of your business, Mary provides that personal touch ensuring you are receiving both the very best information and service you require. Mary’s professionalism is second to none and her ability to listen to and understand any concerns or issues you may have is a true gift.",
            "Michelle",
            "HRBear",
            "testimonial-hr-bear.jpg"
            ) 
        ?>
        <?php component_testimonial(
            "I have been using Mary at Wiseup for nearly 10 years now for our real estate business. Mary took control of my finances, allowing me to focus on the day to day running of the business. Mary is constantly looking for better ways and always trying to streamline our business",
            "Dale",
            "First National Burleigh",
            "testimonial-first-national.jpg"
            ) 
        ?>
        <?php component_testimonial(
            "With Mary’s skill and know-how, she set up what is now a really user-friendly process that means my accounts and banking are always up-to-date with least effort on my part. If I could duplicate Mary for other aspects of my business administration I’d be delighted!",
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