<?php if($page->isVisible() && $page->date() <= time()) : ?>
<!--  BLOG AREA ARTICLE  -->
<section id="blogArticle-section" class="article-section" style="z-index: 9;">
    <div class="article-container">
        <article class="uk-article">
            <h1><?= $page->title()->html() ?></h1>
            <p class="uk-article-meta"><?= $page->date('F j, Y') ?> - <?php echo relativeDate($page->date('Y-m-d')) ?>
            </p>
            <div class="article-tags">
                <?php
                $tags = $page->tags()->split(); 
                ?>
                <?php foreach($tags as $tag): ?>
                   <div class="uk-badge uk-badge-notification">
                      <a href="<?php echo url().'/search?tags=' . urlencode($tag) ?>"><?php echo $tag ?></a>
                  </div>
              <?php endforeach ?>
          </div>
          <p class="uk-article-lead"> by  <?php echo $page->author()->text() ?></p>
          <div class="article-content">
            <div class="uk-clearfix">
                <?php echo $page->teaser()->kirbytext() ?>
                <?php echo $page->text()->kirbytext() ?>
            </div>
        </div>
            <!-- END WITH VIDEO SRTICLE -->
                <div class="article-logo">
                    <?php if($website_logotwo = $site->image($site->website_logotwo())): ?>
                    <img src="<? echo $website_logotwo->url() ?>" alt="<?php echo $website_logotwo->alt_text() ?>">
                    <?php endif ?>
                    <h3>by <?php echo $page->author()->text() ?></h3>
                </div>
        </article>
    </div>
</section>
<!-- END OF BLOG AREA ARTICLE  -->
<?php else : ?>
<!-- Redirect to error page -->
<?php header("Location: error"); 
exit(); ?>
<?php endif ?>