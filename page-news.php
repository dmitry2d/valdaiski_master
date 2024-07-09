<?php
    include "./components/header.php";

    include "./components/page-header.php";

    include "./components/breadcrumbs.php";
?>


<div class="page-content">

    <div class="container">

        <div class="page-title mb-3">
            Новости и промо-акции
        </div>

        <div class="page-subtitle mb-5">
            В данном разделе вы найдете актуальные новости и промо-акции компании «Валдайский мастер»
        </div>

        <!-- Новости -->
        <div class="article-items row g-5">

            <?php include "./components/article-item.php" ?>
            <?php include "./components/article-item.php" ?>
            <?php include "./components/article-item.php" ?>
            <?php include "./components/article-item.php" ?>
            <?php include "./components/article-item.php" ?>
            <?php include "./components/article-item.php" ?>
            <?php include "./components/article-item.php" ?>
        
        </div>
        <!-- / Новости -->

    </div>

    <!-- Навигация страниц -->
    <div class="my-5 pt-2 d-flex justify-content-center">
        <?php include "./components/page-nav.php" ?>
    </div>
    <!-- / Навигация страниц -->

    <!-- / Новости -->

</div>

<?php
    include "./components/page-footer.php";
?>

</div>

<?php
    include "./components/footer.php";
?>