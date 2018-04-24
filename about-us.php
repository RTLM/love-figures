<?php include 'app/partials/head.php'; ?>

<?php component_banner("The Team at your Fingertips") ?>

<div class="container">
    <div class="row staff__row justify-content-sm-center">
        <?php staff_component('Mary Brock', 'Director'); ?>
        <?php staff_component('Sue Green', 'Operations Manager'); ?>
    </div>
    <div class="row staff__row justify-content-sm-center">
        <?php staff_component('Megan Keesse', 'VA Bookkeeping'); ?>
        <?php staff_component('Alexa Ursula Conopio', 'VA Bookkeeping'); ?>
    </div>
</div>


<?php

component_quote("This will be a medium length quote implying that this is the vision of the business in a digestible and relatable format that appeals to clients");

$icons = ['Nasa', 'Us Govt.', 'Doink Man', 'Doink Girl'];

component_icon_grid("Clients we Service", $icons);

include 'app/partials/contact.php';

include 'app/partials/footer.php';

?>


<script>
$(".flip").click(function(){
  $(this).toggleClass("flipit");
});
</script>

<style type="text/css">

.card-flip {
  -webkit-perspective: 1000px;
          perspective: 1000px;
}

.flipit {
    -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}
.card-flip,
.front,
.back {
  width: 100%;
  height: 300px;
}

.flip {
  transition: 0.6s;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  position: relative;
}

.front,
.back {
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
}

.front {
  z-index: 2;
  -webkit-transform: rotateY(0deg);
          transform: rotateY(0deg);
}

.back {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}

</style>