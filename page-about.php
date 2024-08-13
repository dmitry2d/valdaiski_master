
<?php
    include "./components/header.php";

    include "./components/page-header.php";
?>

<div class="page-content">

    <div class="container">

        <div class="breadcrumbs text-style-grey d-flex flex-wrap opacity-75 my-4">
            <a href="/">Главная</a>
            <div class="px-1">•</div>
            <div href="">О компании</div>
        </div>

        <?php
            
            include "./components/about.php";

        ?>

    </div>

</div>

<?php


    include "./components/page-footer.php";

    include "./components/footer.php";
?>