<div class="col-lg-5">
    <div class="card-flip mx-auto">
        <div class="flip">
            <div class="front">
                <div class="card staff__card" style="width: 100%;">
                    <div class="staff__image__container">
                        <img class="card-img-top" src="assets/img/<?php echo $image ?>" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">
                            <span class="staff__name"><?php echo $name; ?></span><br>
                            <?php echo $position; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="back">
                <div class="card staff__card" style="width: 100%;">
                    <div class="card-body">
                        <p>
                            <?php echo $bio ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  