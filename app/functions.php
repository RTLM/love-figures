<?php 
function component_package($title, $price, $image, $content, $subtitle, $includes) {
    include 'partials/package.php';
}

function component_staff($name, $position, $image, $bio) {
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

function component_testimonial($testimonial, $name) {
    include 'partials/testimonial.php';
}

function component_footer_menu($title, $links) {
    include 'partials/footer-menu.php';
}

?>