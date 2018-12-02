<ul class="footer_menu_list">
    <li class="footer__menu__item__title">
        <?php echo $title ?>
    </li>
    <?php foreach ($links as $link) { ?>
        <li class="footer__menu__item__links">
            <?php if ($title != "Quicklinks") { ?>
                <a href="<?php echo $link['url'] ?>" target="_blank" rel="noopener"><?php echo $link['name'] ?></a>
            <?php } else { ?>
                <a href="<?php echo $link['url'] ?>"><?php echo $link['name'] ?></a>
            <?php } ?>
        </li>
    <?php } ?>
</ul>