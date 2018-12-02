<?php 
function component_package($title, $price, $image, $colour, $timeframe, $features) {
    include 'partials/package.php';
}

function component_staff($name, $position, $image, $bio = null) {
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

function component_testimonial($testimonial, $name, $company, $image) {
    include 'partials/testimonial.php';
}

function component_footer_menu($title, $links) {
    include 'partials/footer-menu.php';
}

function component_tile($heading, $body, $headingColour, $icon = null) {
    include 'partials/tile.php';
}

?>