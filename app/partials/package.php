<div class="package">
    <div class="package__header">
        <div class="">
            <?php echo file_get_contents('app/dist/svgs/' . $image . '.svg'); ?>
        </div>
        <!-- <img src="app/dist/images/<?php echo $image; ?>" class="img-fluid rounded-circle mx-auto package__image" alt="<?php echo $title ?>"> -->
        <p class="package__title color--<?php echo $colour ?>"><?php echo $title ?></p>
        <div class="package__price">
            <p><?php echo $price; ?></p>
            <p>starting from; per month</p>
        </div>
        <a href="/contact-us" class="btn package__button package__button--<?php echo $colour ?>">Enquire</a>
    </div>
    <div class="package__features">
        <div class="package__timeframes">
            <?php foreach ($timeframe as $item) { ?>
                <div class="package__feature">
                    <i class="fas fa-check color--<?php echo $colour ?>" style="font-size: 1.5rem; margin: 1rem;"></i>
                    <p><?php echo $item; ?></p>
                </div>
            <?php } ?>
        </div>
        <?php foreach ($features as $feature) { ?>
            <div class="package__feature">
                <i class="fas fa-check color--<?php echo $colour ?>" style="font-size: 1.5rem; margin: 1rem;"></i>
                <p><?php echo $feature; ?></p>
            </div>
        <?php } ?>
    </div>
</div>