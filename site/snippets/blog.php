<!-- THE BLOG  -->
    <section id="blog-section" class="blog-section" style="z-index: 3;">
        <!--- MOBILE TABLET -->
        <div class="blogSec-container uk-hidden-large">
            <a href="<?php echo url('blog') ?>" class="left-blogButton hvr-icon-wobble-horizontal">
                <?php if(page('home/blogroll')->viewblog()->text()->isNotEmpty()) : ?>
                    <?php echo page('home/blogroll')->viewblog()->text(); ?>
                <?php endif ?>
                <span class="uk-icon-angle-right"></span>
            </a>
            <div class="slideshow uk-slidenav-position" data-uk-slideshow="{ autoplay:true, animation:'scroll'}">
                <ul class="uk-slideshow">
                    
                        <?php foreach($articles as $article): ?> 
                    <li>
                        <figure>
                            <div class="uk-block uk-block-primary">
                                <div class="blogImage">
                                    <?php if($image = $article->image($article->mainImage())): ?>
                                            <img src="<?= thumb($image,array('width'=>640, 'height'=>480))->url() ?>" alt="<?= $image->alt_text() ?>"/>
                                    <?php endif ?>
                                </div>
                                <article class="blog-article uk-article">
                                    <p class="uk-article-meta"><?php echo $article->date('F j, Y');  ?>  - <?php echo relativeDate($article->date('Y-m-d')) ?>
                                        <br> by <?php echo $article->author() ?></p>
                                    <h2><?php echo $article->title()->html() ?></h2>
                                    <?php echo $article->teaser()->kt() ?>
                                    <div class="blog-readmore">
                                        <a href="<?php echo $article->url() ?>" class="left-readmore hvr-icon-wobble-horizontal">Read More
                                            <span class="uk-icon-angle-right"></span>
                                        </a>
                                    </div>
                                </article>
                            </div>

                        </figure>
                    </li>
                        <?php endforeach ?>
                </ul>
                <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-left">
                <?php $no = 0; foreach($articles as $articless): ?>
                    <li data-uk-slideshow-item="<?php echo $no ?>">
                        <a></a>
                    </li>
                <?php $no++; endforeach ?>
                </ul>
            </div>
        </div>
        </div>
        <!--- END MOBILE TABLET -->
        <!--- DESKTOP -->

        <div class="blogSec-container uk-visible-large">
            <a href="<?php echo url('blog') ?>" class="left-blogButton hvr-icon-wobble-horizontal">
                <?php if(page('home/blogroll')->viewblog()->text()->isNotEmpty()) : ?>
                    <?php echo page('home/blogroll')->viewblog()->text(); ?>
                <?php endif ?>
                <span class="uk-icon-angle-right"></span>
            </a>
            <div class="slideshow uk-slidenav-position" data-uk-slideshow="{ autoplay:true, animation:'scroll'}">
                <ul class="uk-slideshow">
                <?php foreach($articles->chunk(3) as $article): ?>
                    <li>
                        <figure>
                            <div class="uk-grid uk-grid-small">
                                <?php $no = 1; foreach($article as $articless): ?>
                                    <div class="uk-width-1-3">
                                        <div class="uk-block uk-block-primary">
                                            <div class="blogImage">
                                                <?php if($image = $articless->image($articless->mainImage())): ?>
                                                        <img src="<?= thumb($image,array('width'=>640, 'height'=>480))->url() ?>" alt="<?= $image->alt_text() ?>"/>
                                                <?php endif ?>
                                            </div>
                                            <article class="blog-article uk-article">
                                                
                                                <p class="uk-article-meta"><?php echo $articless->date('F j, Y');  ?> - <?php echo relativeDate($articless->date('Y-m-d')) ?>
                                                    <br> by <?php echo $articless->author() ?></p>
                                                <h2><?php echo $articless->title() ?></h2>
                                                <?php echo $articless->teaser()->kt() ?>
                                                <div class="blog-readmore">
                                                    <a href="<?php echo $articless->url() ?>" class="left-readmore hvr-icon-wobble-horizontal">Read More
                                                        <span class="uk-icon-angle-right"></span>
                                                    </a>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </figure>
                    </li>
                <?php endforeach ?>
                </ul>
                <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-left">
                <?php $no = 0; foreach($articles->chunk(3) as $articless): ?>
                    <li data-uk-slideshow-item="<?php echo $no ?>">
                        <a></a>
                    </li>
                <?php $no++; endforeach ?>
                   
                </ul>
            </div>
        </div>
        <!--- END DESKTOP -->
    </section>
    <!-- END OF THE BLOG  -->