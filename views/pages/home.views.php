<?php
// Import Header and Navbar:
require('./views/partials/header.php');
require('./views/partials/navbar.php');
?>

<!-- App Container Start -->
<div id="app-container" class="flex w-full h-full overflow-x-hidden">

    <!-- Side Menu Start -->
    <?php require('./views/partials/side_menu.php'); ?>
    <!-- Side Menu End -->

    <!-- Main Content Start -->
    <div id="app-content" class="w-full h-full overflow-hidden">





    <?php require('./controllers/list_show.controller.php'); ?>


    </div>
    <!-- Main Content End -->



    <!-- Details Start -->
    <div id="details-dialog" class="absolute w-full bg-primary overflow-scroll overflow-x-hidden rounded-lg z-20">
        <?php require('./views/pages/detail.views.php'); ?>
    </div>
    <!-- Details End -->



</div>
<!-- App Container End -->



<?php
// Import Footer:
require('./views/partials/footer.php');
?>