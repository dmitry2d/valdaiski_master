
<?php
    include "./components/header.php";

    include "./components/page-header.php";

    include "./components/breadcrumbs.php";
?>

<div class="page-content">

    <div class="container">

        <div class="breadcrumbs text-style-grey d-flex flex-wrap opacity-75 my-4">
            <a href="/">Главная</a>
            <div class="px-1">•</div>
            <div href="">Новости</div>
            <div class="px-1">•</div>
            <div href=""> Скидки на строительство каркасного дома в 2024 году</div>
        </div>

        <?php
            include "./components/article.php";
        ?>

    </div>

</div>

<?php
    include "./components/page-footer.php";
?>

<?php
    include "./components/footer.php";
?>