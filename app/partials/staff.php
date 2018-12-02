<?php if (is_null($bio)) { ?>
    <div class="staff__container staff__container--secondary">
<?php } else { ?>
    <div class="staff__container staff__container--primary">
<?php } ?>
    <div class="staff__photo__container">
        <div class="staff__photo">
            <img src="app/dist/images/<?php echo $image ?>" alt="Card image cap">
        </div>
    </div>
    <div class="staff__details">
        <p class="staff__name"><?php echo $name; ?></p>
        <p class="staff__position"><?php echo $position; ?></p>
        <?php if ($bio) { ?>
                <p class="staff__bio"><?php echo $bio ?></p>
        <?php } ?>
    </div>
</div>
