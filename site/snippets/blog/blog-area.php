<!--  BLOG AREA  -->
<section id="blog-section" class="blogArea" style="z-index: 9;">
    <div class="blog-container">
        <div class="uk-hidden-large">
            <?php if(param('tag')): // show service tag results ?>
             <?php $no = 1; foreach($tagsperarticles as $tags): ?>
             <?php if ($no % 2 == 0) : ?>
                <div class="left-block">
                <?php else : ?>
                    <div class="right-block">    
                    <?php endif ?>
                    <a href="<?php echo $tags->url() ?>" class="hvr-icon-wobble-horizontal">
                        <div class="uk-panel">
                            <p class="uk-article-meta">
                                <time datetime="<?php echo $tags->date() ?>">
                                    <?php echo $tags->date('F j, Y');  ?> - <?php echo relativeDate($tags->date('Y-m-d')) ?>
                                </time>
                            </p>
                            <p class="uk-article-lead">
                                <?php echo $tags->title()->html() ?> <span class="rightBlog-angle uk-icon-angle-right"></span>
                            </p>
                        </div>
                    </a>
                </div>
                <?php $no++; endforeach ?>

                <!-- end right block-->
                <?php if($tagpagination->hasPages()): ?>
                    <?php if($tagpagination->hasPrevPage()): ?>
                        <div class="prev-next-prev">
                            <a id="prevPage" href="<?= $tagpagination->prevPageURL() ?>" class="hvr-icon-wobble-horizontal"><span class="uk-icon-angle-double-left"></span>&nbsp;&nbsp;<?php echo page('blog')->pagination_left()->text() ?></a>
                        </div>
                    <?php endif ?>
                    <?php if($tagpagination->hasNextPage()): ?>
                       <div class="prev-next">
                        <a id="nextPage" href="<?= $tagpagination->nextPageURL() ?>" class="hvr-icon-wobble-horizontal"><?php echo page('blog')->pagination_right()->text() ?><span class="uk-icon-angle-double-right"></span></a>
                    </div>
                <?php endif ?>  
            <?php else: ?>
            <?php endif ?>
        <?php else : ?>
            <?php if($articles->count()): ?>
                <?php $no = 1; foreach($isarticles->flip()->not($isfeatured)->paginate($perpage) as $article): ?>
                <?php if ($no % 2 == 0) : ?>
                    <div class="left-block">
                    <?php else : ?>
                        <div class="right-block">    
                        <?php endif ?>
                        <a href="<?php echo $article->url() ?>" class="hvr-icon-wobble-horizontal">
                            <div class="uk-panel">
                                <p class="uk-article-meta">
                                    <time datetime="<?php echo $article->date() ?>">
                                        <?php echo $article->date('F j, Y');  ?> - <?php echo relativeDate($article->date('Y-m-d')) ?>
                                    </time>
                                </p>
                                <p class="uk-article-lead">
                                    <?php echo $article->title()->html() ?> <span class="rightBlog-angle uk-icon-angle-right"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php $no++; endforeach ?>
                <?php else: ?>
                    <p><?php echo $page->no_articles()->text() ?></p>
                <?php endif ?>
                <!-- end right block-->
                <?php if($pagination->hasPages()): ?>
                    <?php if($pagination->hasPrevPage()): ?>
                        <div class="prev-next-prev">
                            <a id="prevPage" href="<?= $pagination->prevPageURL() ?>" class="hvr-icon-wobble-horizontal"><span class="uk-icon-angle-double-left"></span>&nbsp;&nbsp;<?php echo page('blog')->pagination_left()->text() ?></a>
                        </div>
                    <?php endif ?>
                    <?php if($pagination->hasNextPage()): ?>
                       <div class="prev-next">
                        <a id="nextPage" href="<?= $pagination->nextPageURL() ?>" class="hvr-icon-wobble-horizontal"><?php echo page('blog')->pagination_right()->text() ?><span class="uk-icon-angle-double-right"></span></a>
                    </div>
                <?php endif ?>  
            <?php else: ?>
            <?php endif ?>
        <?php endif ?>
    </div>
    <!--end visible-->
    <!-- DESKTOP -->
    <div class="uk-visible-large" id="blogSectionx">

        <?php if(param('tag')): // show service tag results ?>
           <div class="uk-grid">
            <?php foreach($tagsperarticles as $tags): ?>
                <div class="uk-width-1-3">
                    <div class="blogArea-lg">
                        <a href="<?php echo $tags->url() ?>" class="hvr-icon-wobble-horizontal">
                            <div class="uk-panel">
                                <p class="uk-article-meta">
                                    <time datetime="<?php echo $tags->date() ?>">
                                      <?php echo $tags->date('F j, Y');  ?> - <?php echo relativeDate($tags->date('Y-m-d')) ?>
                                  </time>
                              </p>
                              <p class="uk-article-lead">
                                <?php echo $tags->title()->html() ?>
                                <span class="rightBlog-angle uk-icon-angle-right"></span>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach ?>

    </div>
    <?php if($tagpagination->hasPages()): ?>
        <?php if($tagpagination->hasPrevPage()): ?>
            <div class="prev-next-prev" style="">
                <a id="prevPage" href="<?= $tagpagination->prevPageURL() ?>" class="hvr-icon-wobble-horizontal"><span class="uk-icon-angle-double-left"></span>&nbsp;&nbsp; <?php echo page('blog')->pagination_left()->text() ?></a>
            </div>
        <?php endif ?>
        <?php if($tagpagination->hasNextPage()): ?>
            <div class="prev-next">
                <a id="nextPage" href="<?= $tagpagination->nextPageURL() ?>" class="hvr-icon-wobble-horizontal"><?php echo page('blog')->pagination_right()->text() ?><span class="uk-icon-angle-double-right"></span></a>

            </div>
        <?php endif ?>  
    <?php else: ?>
    <?php endif ?>
<?php else : ?>
    <div class="uk-grid">
        <?php if($articles->count()): ?>
         <?php foreach($isarticles->flip()->not($isfeatured)->paginate($perpage) as $article): ?>   
            <div class="uk-width-1-3">
                <div class="blogArea-lg">
                    <a href="<?php echo $article->url() ?>" class="hvr-icon-wobble-horizontal">
                        <div class="uk-panel">
                            <p class="uk-article-meta">
                                <time datetime="<?php echo $article->date() ?>">
                                 <?php echo $article->date('F j, Y');  ?> - <?php echo relativeDate($article->date('Y-m-d')) ?>
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
   <p><?php echo $page->no_articles()->text() ?></p>
<?php endif ?>
</div>
<?php if($pagination->hasPages()): ?>
    <?php if($pagination->hasPrevPage()): ?>
        <div class="prev-next-prev" style="">
            <a id="prevPage" href="<?php echo $pagination->prevPageURL() ?>" class="hvr-icon-wobble-horizontal"><span class="uk-icon-angle-double-left"></span>&nbsp;&nbsp; <?php echo page('blog')->pagination_left()->text() ?></a>
        </div>
    <?php endif ?>
    <?php if($pagination->hasNextPage()): ?>
        <div class="prev-next">
            <a id="nextPage" href="<?php echo $pagination->nextPageURL() ?>" class="hvr-icon-wobble-horizontal"><?php echo page('blog')->pagination_right()->text() ?><span class="uk-icon-angle-double-right"></span></a>

        </div>
    <?php endif ?>  
<?php endif ?>
<?php endif ?>
<!-- end visible desktop-->
<!-- DESKTOP -->
</div>

<!--end container-->
</section>
    <!-- END OF BLOG AREA  -->