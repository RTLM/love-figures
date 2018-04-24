<div class="container">
    <div class="package">
        <div class="row justify-content-md-center">
            <div class="col-sm-3">
                <div class="text-center">
                    <img src="http://via.placeholder.com/250x250" class="img-fluid rounded-circle mx-auto" alt="Responsive image">
                </div>
                <div class="hero__text">
                    <p>from</p>
                    <h1><?php echo $price; ?></h1>
                    <p><b>per month + GST </b></p>
                </div>
            </div>
            <div class="col-sm-5 align-self-center">
                <h1><?php echo $title ?></h1>
                <ul>
                    <?php foreach ($content as $item) { ?>
                        <li>
                            <?php echo $item ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <p>Includes</p>
        </div>
        <div class="row justify-content-md-center">
            <ul class="package__list">
                <?php foreach ($includes as $item) { ?>
                    <li>
                        <?php echo $item ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>