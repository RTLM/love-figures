<div class="container">
    <div class="text-center">
        <h1><?php echo $title ?></h1>
    </div>
    <div class="row justify-content-md-center text-center" style="margin-bottom: 2rem">
        <?php foreach ($icons as $item) { ?>
            <div class="col-sm-2">
                <i class="fas fa-check" style="font-size: 3rem; margin: 1rem;"></i><br>
                <?php echo $item; ?>
            </div>
        <?php } ?>
    </div>
</div>