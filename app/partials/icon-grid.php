<div class="icon-grid container">
    <div class="icon-grid__heading">
        <h2><?php echo $title ?></h2>
    </div>
    <div class="icon-grid__row" style="margin-bottom: 2rem">
        <?php foreach ($icons as $name => $image) { ?>
            <div class="icon-grid__column">
                <img class="icon-grid__image" src="app/dist/images/<?php echo $image ?>" alt="<?php echo $name; ?>">
            </div>
        <?php } ?>
    </div>
</div>