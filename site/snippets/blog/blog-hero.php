    <!-- BLOG HERO BANNER -->
<?php if($articles->count() > 0): ?>
<?php if($blog_background_image = $page->children()->visible()->filterBy('date', '<=', time())->flip()->first()->mainImage()->toFile()): ?>
    <section id="hero-banner" class="hero-banner uk-container" style="z-index: 10; background: linear-gradient(rgba(29, 51, 74,.8), rgba(29, 51, 74,.8)), url('<?= thumb($blog_background_image,array('width'=>1200, 'height'=>630, 'crop'=>true))->url() ?>') no-repeat center center fixed; background-size: cover; background-attachment: initial;">
   <?php else : ?>
       <section id="hero-banner" class="hero-banner uk-container" style="z-index: 10; background: rgb(61, 77, 97)">     
   <?php endif ?>
        <div class="hero-container">
            <div class="logo">
            <?php if($blog_logo = $site->image($site->website_logo())): ?>
                <img src="<?= $blog_logo->resize(150, 65, 100)->url() ?>" alt="<?php echo $blog_logo->alt_text() ?>">
            <?php endif ?>
                <h1><?php echo $page->title()->text() ?></h1>
                <h2 class="article-title"><?php echo $page->children()->visible()->filterBy('date', '<=', time())->flip()->first()->title()->text() ?></h2>
            </div>
            <div class="blog-desc">
                <p class="blogexcerpt">
                    <?php echo $page->children()->visible()->filterBy('date', '<=', time())->flip()->first()->teaser()->text() ?>
                </p>
                <p class="uk-article-meta">
                    <time datetime="<?php echo $page->children()->visible()->filterBy('date', '<=', time())->flip()->first()->date() ?>">
                        <?php echo $page->children()->visible()->filterBy('date', '<=', time())->flip()->first()->date('F j, Y');  ?>
                    </time>
                </p>
            </div>
            <div class="readmore"><a href="<?php echo $page->children()->visible()->filterBy('date', '<=', time())->flip()->first()->url() ?>" class="read-more-button hvr-icon-wobble-horizontal">Read More<span class="uk-icon-angle-right"></span></a></div>
        </div>
</section>
<?php else: ?>
<p><?php echo $page->no_articles()->text() ?></p>
<?php endif ?>
    <!-- END OF BLOG HERO BANNER  -->