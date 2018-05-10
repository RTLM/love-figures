<?php include 'app/partials/head.php'; ?>

<div class="banner__about-us">
    <?php component_banner("We’re passionate about empowering small business owners to make financial decisions with confidence to grow their business", "packages-hero.png"); ?>
</div>

<div class="container">
    <div class="row staff__row justify-content-sm-center">
        <?php 
            component_staff(
                'Mary Brock',
                'Director/BAS Agent',
                'home-mary.JPG',
                'Mary Brock has over 25 years experience in Financial & Administrative Management. She is passionate about embracing change through education and innovation to provide the best service possible for her clients.<br><br>     
                Her skills lie in business planning, creative lateral & strategic thinking, human resources, operations and financial management. Mary is a registered BAS agent with the Tax Practitioners Board, has a Bachelor of Arts in Management and Certificate IV in Financial Services & is a member of the Australian Bookkeepers Network.'
            ); 
        ?>
        <?php 
            component_staff(
                'Sue Green',
                'Bookkeeping/Payables',
                'home-mary.JPG',
                'Susan has nearly 20 years experience is various office roles ranging from Office Administration and Management and includes Sales, Customer Service, Payroll and Accounts excellence. She is highly motivated, multi-skilled, organised and has a strong attention to detail.<br><br>  
                She is friendly, courteous, honest, reliable, loyal and also professional in all areas of her working life and has a great rapport with her co-workers of all ages.'
            ); 
        ?>
    </div>
    <div class="row staff__row justify-content-sm-center">
        <?php 
            component_staff(
                'Megan Keesse',
                'VA/Bookkeeping/Payroll',
                'home-mary.JPG',
                'Megan from Gold Coast Virtual Assistant makes the impossible possible. She brings a broad range of administrative skills & knowledge gained from over 18 years’ experience in service, retail and commercial property industries.<br><br>  
                With her positive energy and excellent verbal and written communication skills Megan provides professional support services that allow other businesses the opportunity to focus on growth and success.'
            ); 
        ?>
        <?php
            component_staff(
                'Alexa Ursula Conopio',
                'VA/Bookkeeping/Receivables',
                'home-mary.JPG',
                "Alexa has had a career as an online freelancer since 2011. After graduating from University of the Philippines with a BS Economics degree, she worked for IBM Business Services and JP Morgan Chase for three years.<br><br>  
                During that time she saw the rise of online freelancing in the Philippines and took the opportunity to change careers and create long-term relationship with clients. Her greatest passion is learning new skills that will benefit her clients' business"
            ); 
        ?>
    </div>
</div>


<?php

$icons = ['First National Real Estate', 'Just Cuts', 'Callister Media', 'HR Bear', 'Positive Relating'];

component_icon_grid("Clients we Service", $icons);

include 'app/partials/contact.php';

include 'app/partials/footer.php';

?>