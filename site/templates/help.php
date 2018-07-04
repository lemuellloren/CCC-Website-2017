<?php snippet('header') ?>

    <section id="blogArticle-section" class="article-section" style="z-index: 9;">
        <div class="article-container">
            <article class="uk-article">
            		<h1><?php echo $page->title()->title() ?></h1>
            		<?php echo $page->text()->kt() ?>
            </article>
        </div>

    </section>
<?php snippet('article/article-menu') ?>
<?php snippet('footer') ?>