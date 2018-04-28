<ul class="footer_menu_list">
    <li class="footer__menu__item__title">
        <?php echo $title ?>
    </li>
    <?php foreach ($links as $link) { ?>
        <li class="footer__menu__item__links">
            <a href="<?php echo $link['url'] ?>"><?php echo $link['name'] ?></a>
        </li>
    <?php } ?>

</ul>