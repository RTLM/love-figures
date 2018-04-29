<div class="container">
    <div class="package">
        <div class="row justify-content-md-center">
            <div class="col-md-3">
                <div class="package__image text-center">
                    <img src="assets/img/<?php echo $image; ?>" class="img-fluid rounded-circle mx-auto" alt="<?php echo $title ?>">
                </div>
                <div class="package__image__text">
                    <p>from</p>
                    <h1><?php echo $price; ?></h1>
                    <p><b>per month + GST </b></p>
                </div>
            </div>
            <div class="col-md-5 align-self-center">
                <h1><?php echo $title ?></h1>
                <ul class="package__list">
                    <?php foreach ($content as $item) { ?>
                        <li>
                            <?php echo $item ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="package__includes__title col-md-8">
                <p><?php echo $subtitle ?></p>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="package__includes__list col-md-8">
            <?php foreach ($includes as $item) { ?>
                <div class="package__includes__list__item">
                    <i class="far fa-check-circle"></i>
                    <p>
                        <?php echo $item ?>
                    </p>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</div>