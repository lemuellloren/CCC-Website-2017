<?php snippet('header') ?>
<!-- BLOG SEARCH HERO-->
    <section id="searchArea-banner" class="search-banner uk-container" style="z-index: 10;">
        <div class="search-container">
                <?php foreach($results as $result): ?>
                <?php endforeach ?>
                <?php if($results->count() == 1) : ?>
                    <h1><?php echo str_replace('--SEARCHTERM--',esc($query), $page->search_result_query()) ?></h1>
                <?php elseif($results->count() > 1) : ?>
                    <?php 
                    $str_replaceString = str_replace('--SEARCHTERM--',esc($query), $page->many_result());
                    $str_replaceCount = str_replace('--RESULTCOUNT--',$results->count(), $str_replaceString);
                    ?>
                    <h1><?php echo $str_replaceCount; ?></h1>
                <?php else : ?>
                    <h1><?php echo str_replace('--SEARCHTERM--',esc($query), $page->nosearchfound()) ?></h1>
                <?php endif ?>
        </div>
    </section>
<!-- END OF BLOG SEARCH HERO-->

<!--  BLOG AREA  -->
    <section id="blog-section" class="blogArea" style="z-index: 9;">
        <div class="blog-container">
            <div class="uk-hidden-large">
         <?php if($results->count()): ?>
            <?php $no = 1; foreach($results as $article): ?>
                <?php if ($no % 2 == 0) : ?>
                <div class="left-block">
                <?php else : ?>
                <div class="right-block">    
                <?php endif ?>
                    <a href="<?php echo $article->url() ?>">
                        <div class="uk-panel">
                            <p class="uk-article-meta">
                                <time datetime="<?php echo $article->date() ?>">
                                    <?php echo $article->date('F j, Y');  ?>
                                </time>
                            </p>
                            <p class="uk-article-lead">
                                <?php echo $article->title()->html() ?> <i class="rightBlog-angle uk-icon-angle-right"></i>
                            </p>
                        </div>
                    </a>
                </div>
            <?php $no++; endforeach ?>
        <?php else: ?>
        <p><?php echo page('blog')->no_articles()->text() ?></p>
        <?php endif ?>
                <!-- end right block-->
        <?php if($pagination->hasPages()): ?>
            <?php if($pagination->hasPrevPage()): ?>
                <div class="prev-next-prev">
                    <a id="prevPage" href="<?= $pagination->prevPageURL() ?>#blog-section" class="hvr-icon-wobble-horizontal"><span class="uk-icon-angle-double-left"></span>&nbsp;&nbsp;<?php echo page('blog')->pagination_left()->text() ?></a>
                </div>
            <?php endif ?>
            <?php if($pagination->hasNextPage()): ?>
                 <div class="prev-next">
                    <a id="nextPage" href="<?= $pagination->nextPageURL() ?>#blog-section" class="hvr-icon-wobble-horizontal"><?php echo page('blog')->pagination_right()->text() ?><span class="uk-icon-angle-double-right"></span></a>
                </div>
            <?php endif ?>  
         <?php else: ?>
        <?php endif ?>
            </div>
            <!--end visible-->
            <!-- DESKTOP -->
            <div class="uk-visible-large">
    <div class="uk-grid">
        <?php if($results->count()): ?>
            <?php foreach($results as $article): ?>   
                <div class="uk-width-1-3">
                    <div class="blogArea-lg">
                        <a href="<?php echo $article->url() ?>" class="hvr-icon-wobble-horizontal">
                            <div class="uk-panel">
                                <p class="uk-article-meta">
                                    <time datetime="<?php echo $article->date() ?>">
                                      <?php echo $article->date('F j, Y');  ?>
                                    </time>
                                </p>
                                <p class="uk-article-lead">
                                    <?php echo $article->title()->html() ?>
                                    <span class="rightBlog-angle uk-icon-angle-right"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        <?php else: ?>
        <?php if($page->nosearchfound()->kt()->isNotEmpty()) : ?>
            <?php echo str_replace('--SEARCHTERM--',esc($query), $page->nosearchfound()) ?>
        <?php else : ?>
            <p><?php echo page('blog')->no_articles()->text() ?></p>
        <?php endif ?>
        <?php endif ?>
    </div>
    <?php if($pagination->hasPages()): ?>
    <?php if($pagination->hasPrevPage()): ?>
                <div class="prev-next-prev" style="">
                    <a id="prevPage" href="<?= $pagination->prevPageURL() ?>#blog-section" class="hvr-icon-wobble-horizontal"><span class="uk-icon-angle-double-left"></span>&nbsp;&nbsp; <?php echo page('blog')->pagination_left()->text() ?></a>
                </div>
    <?php endif ?>
    <?php if($pagination->hasNextPage()): ?>
                <div class="prev-next">
                    <a id="nextPage" href="<?= $pagination->nextPageURL() ?>#blog-section" class="hvr-icon-wobble-horizontal"><?php echo page('blog')->pagination_right()->text() ?><span class="uk-icon-angle-double-right"></span></a>

                </div>
    <?php endif ?>  
 <?php else: ?>
<?php endif ?>
                <!-- end visible desktop-->
                <!-- DESKTOP -->
            </div>
            <!--end container-->
    </section>
<!-- END OF BLOG AREA  -->

<?php snippet('article/article-popular-tags')?>
<?php snippet('article/article-contact-us') ?>
<?php snippet('article/article-menu') ?>
<?php snippet('footer') ?>