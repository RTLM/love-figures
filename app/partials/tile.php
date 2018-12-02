<div class="tile">
    <?php if (! is_null($icon)) { ?>
        <div class="tile__icon">
            <!-- <img src="app/dist/svgs/<?php echo $icon ?>.svg"> -->
            <?php echo file_get_contents('app/dist/svgs/' . $icon . '.svg'); ?>
        </div>
    <?php } ?>
    <div class="tile__heading color--<?php echo $headingColour ?>">
        <h3><?php echo $heading ?></h3>
    </div>
    <div class="tile__body">
        <p><?php echo $body ?></p>
    </div>
</div>