
<?php
    include "./components/header.php";

    include "./components/page-header.php";

    include "./components/breadcrumbs.php";
?>

<div class="page-content">

    <div class="container">

        <div class="works-gallery works-gallery-full">
    
            <div class="row align-items-stretch">

                <div class="col-lg-6 col-xl-4 d-flex"><?php include './components/works-gallery-item-social.php' ?></div>

                <?php for ($i = 1; $i <= 10; $i++) {?>
                    
                <div class="col-lg-6 col-xl-4 d-flex"><?php include './components/works-gallery-item.php' ?></div>

                <?php }?>

    
            </div>
    
        </div>

    </div>

    <?php
        include "./components/catalogue-widget.php";
    ?>

    <?php
        include "./components/individual-widget.php";
    ?>

    <?php
        include "./components/consult-footer-widget.php";
    ?>

</div>

<?php
    include "./components/page-footer.php";
?>

<?php
    include "./components/footer.php";
?>