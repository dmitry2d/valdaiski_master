
<?php
    include "./components/header.php";
?>

<div class="page-news">

<?php
    include "./components/page-header.php";
?>

    <div class="page-content">

        <div class="container">

            <div class="breadcrumbs text-style-grey d-flex opacity-75 my-4">
                <a href="/">Главная</a>
                <div class="px-1">•</div>
                <div href="">Новости</div>
            </div>
    
            <div class="page-title">
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

        <!-- / Новости -->


    </div>

<?php
    include "./components/page-footer.php";
?>

</div>

<?php
    include "./components/footer.php";
?>