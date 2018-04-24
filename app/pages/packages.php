<?php 

include '../partials/head.php';

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
packages_component(
    'Package 1',
    '$249',
    $content,
    $includes
);

$content = [
    'As above plus we cover all of your payable, receivables and compliance reporting',
    'Need extra content for this point so that we keep a consistent 3 dash formula', 
    'Perfect for Small Businesses struggling to keep up with transactions and compliance'
];
packages_component(
    'Package 2',
    '$449',
    $content,
    $includes
);

$content = [
    'As above plus Payroll, Payroll Tax, Superannuation and Management Reporting',
    'Saving time, money and resources through Monthly Management Insights Reporting', 
    'Perfect for Small-Medium size businesses with Bookkeeping, Payroll and Payroll tax taken care of'
];
packages_component(
    'Package 3',
    '$799',
    $content,
    $includes
);

include '../partials/contact.php';

include '../partials/footer.php';

?>