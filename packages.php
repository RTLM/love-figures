<?php 

include 'app/partials/head.php';

?>

<div class="banner__packages">
    <?php component_banner("Packages for Any Size", "packages-hero.png"); ?>
</div>

<?php

$content = [
    'We cover all bookkeeping basics and financial reporting for you',
    '24/7 access using Cloud Accounting plus Document Management', 
    'Perfect for Start-Ups, Sole Traders and Micro Businesses'
];
$includes = [
    'MYOX/XERO setup and maintenance',
    'Hubdoc and Receiptbank subscriptions',
    'EOFY Reporting and Liaising with Accountant',
    'Bank Reconciliations Quarterly',
    'Financial Reporting',
    'Unlimited phone support',
];
component_package(
    'Package 1',
    '$249',
    'package-1.png',
    $content,
    'Includes',
    $includes
);

$content = [
    'As above plus we cover all of your payable, receivables and compliance reporting',
    'Need extra content for this point so that we keep a consistent 3 dash formula', 
    'Perfect for Small Businesses struggling to keep up with transactions and compliance'
];
component_package(
    'Package 2',
    '$449',
    'package-2.png',
    $content,
    'Includes above package plus',
    $includes
);

$content = [
    'As above plus Payroll, Payroll Tax, Superannuation and Management Reporting',
    'Saving time, money and resources through Monthly Management Insights Reporting', 
    'Perfect for Small-Medium size businesses with Bookkeeping, Payroll and Payroll tax taken care of'
];
component_package(
    'Package 3',
    '$799',
    'package-3.png',
    $content,
    'Includes above packages plus',
    $includes
);

include 'app/partials/contact.php';

include 'app/partials/footer.php';

?>