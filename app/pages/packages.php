<?php 

include 'app/partials/head.php';

?>

<div class="banner banner--packages">
    <div class="banner__text container">
        <h1>Affordable bookkeeping packages for every business.</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="banner--overlay"></div>
</div>


<div class="container">
    <div class="packages">
        


<?php


$timeframe = [
    'Monthly Reconciliations',
    'Quarterly Financial Reporting',
    'Up to 50 transactions per month',
];

$features = [
    'MYOB/XERO Setup & Maintenance',
    'Hubdoc/Receiptbank',
    'Unlimited Phone & Email Support',
    'EOFY Reviews & Reconciliations',
    'EOFY Liason with Accountant',
    'BAS/IAS Preparation & Lodgement',
];

component_package(
    'Fledgling',
    '$249',
    'package-1.png',
    'blue',
    $timeframe,
    $features
);


$timeframe = [
    'Fortnightly Reconciliations',
    'Monthly Financial Reporting',
    'Up to 90 transactions per month',
];

$features = [
    'MYOB/XERO Setup & Maintenance',
    'Hubdoc/Receiptbank',
    'Unlimited Phone & Email Support',
    'EOFY Reviews & Reconciliations',
    'EOFY Liason with Accountant',
    'BAS/IAS Preparation & Lodgement',
    'Accounts Payable Management',
    'Acccounts Receivable Management',
];
component_package(
    'Scout',
    '$449',
    'package-2.png',
    'purple',
    $timeframe,
    $features
);

$timeframe = [
    'Weekly Reconciliations',
    'Custom/Insight Financial Reporting',
    'Up to 160 transactions per month',
];

$features = [
    'MYOB/XERO Setup & Maintenance',
    'Hubdoc/Receiptbank',
    'Unlimited Phone & Email Support',
    'EOFY Reviews & Reconciliations',
    'EOFY Liason with Accountant',
    'BAS/IAS Preparation & Lodgement',
    'Accounts Payable Management',
    'Acccounts Receivable Management',
    'Payroll Processing',
    'Payroll Tax',
    'Superannuation',
];
component_package(
    'Hunter',
    '$799',
    'package-3.png',
    'pink',
    $timeframe,
    $features
);

// $content = [
//     'As above plus we cover all of your payable, receivables and compliance reporting',
//     'Perfect for Small Businesses struggling to keep up with transactions and compliance'
// ];
// component_package(
//     'Scout',
//     '$449',
//     'package-2.png',
//     $content,
//     'Includes above package plus',
//     $includes
// );

// $content = [
//     'As above plus Payroll, Payroll Tax, Superannuation and Management Reporting',
//     'Saving time, money and resources through Monthly Management Insights Reporting', 
//     'Perfect for Small-Medium size businesses with Bookkeeping, Payroll and Payroll tax taken care of'
// ];
// component_package(
//     'Hunter',
//     '$799',
//     'package-3.png',
//     $content,
//     'Includes above packages plus',
//     $includes
// );

?> 

    </div>
</div>

<?php

include 'app/partials/cta.php';
include 'app/partials/footer.php';

?>