<?php 

include 'app/partials/head.php';

?>

<div class="banner banner--packages">
    <div class="banner__text container">
        <h1>Affordable bookkeeping packages for every business.</h1>
        <p>From sole traders to medium sized businesses, our packages accommodate your every need. We take the burden out of your books and give you clear insights to increase efficiency and maximise profitability.</p>
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
    'Reporting',
    '$249',
    'reporting',
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
    'Accounts',
    '$449',
    'accounts',
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
    'Payroll',
    '$799',
    'payroll',
    'pink',
    $timeframe,
    $features
);
?> 

    </div>
</div>

<?php

include 'app/partials/cta.php';
include 'app/partials/footer.php';

?>