<?php snippet('header') ?>
<!-- HERO BANNER -->
<section id="errorPage" class="error-page uk-container">
    <div class="container">
        <div class="logo">
        <?php if($website_logotwo = $site->image($site->website_logotwo())): ?>
            <img src="<?= $website_logotwo->resize(150, 65, 100)->url() ?>" alt="<?= $website_logotwo->alt_text() ?>">
        <?php endif ?>
            <h1><?php echo $page->error_header()->title(); ?></h1>
            <?php echo $page->error_message()->kt(); ?>
        </div>
    </div>
</section>
<!-- END OF HERO BANNER  -->
<?php snippet('article/article-popular-tags') ?>

<?php snippet('article/article-contact-us') ?>
<?php snippet('article/article-menu') ?>
<?php snippet('footer') ?>