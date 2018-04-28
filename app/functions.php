<?php 
function packages_component($title, $price, $content, $includes) {
    include 'partials/package.php';
}

function staff_component($name, $position) {
    include 'partials/staff.php';
}

function component_banner($title, $image) {
    include 'partials/banner.php';
}

function component_quote($quote) {
    include 'partials/quote.php';
}

function component_icon_grid($title, $icons) {
    include 'partials/icon-grid.php';
}



?>