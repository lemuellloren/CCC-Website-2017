    <!-- TAGS AND SEARCH AREA  -->
    <section id="tags-section" class="tag-search-section" style="z-index: 6;">
        <div class="tag-section-container">
            <div class="uk-hidden-large tag-container">
                <h2>
                    <?php if(page('blog')->popular_tags()->text()->isNotEmpty()) : ?>
                        <?php echo page('blog')->popular_tags()->text() ?>
                    <?php endif ?>
                </h2>
                <div class="badge-container">
                	<?php foreach($tagcloud as $tag): ?>
	                    <div class="uk-badge uk-badge-notification">
	                        <a href="<?php echo $tag->url() ?>" title="search for <?php echo $tag->name() ?> articles"><?php echo $tag->name() ?></a>
	                    </div>
                	<?php endforeach ?>
                </div>
                <div class="search-area-container">
                    <ul class="search-area">
                        <li class="search-form">
                            <form action="<?php echo url()?>/search" id="search-formArticleM">
                                <span class="uk-icon-search" id="articleSearchM"></span>
                                <input placeholder="Search" id="searchField" name="search-field">
                                <input type="submit" id="ccc" style="visibility: hidden;">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end tag container-->
            <!--  DESKTOP -->
            <div class="uk-visible-large tag-container">
                <div class="uk-grid">
                    <div class="uk-width-4-10">
                        <h2>
                        <?php if(page('blog')->popular_tags()->text()->isNotEmpty()) : ?>
                            <?php echo page('blog')->popular_tags()->text() ?>
                        <?php endif ?>
                        </h2>
                        <div class="badge-container">
                            <?php foreach($tagcloud as $tag): ?>
			                    <div class="uk-badge uk-badge-notification">
			                        <a href="<?php echo $tag->url() ?>" title="search for <?php echo $tag->name() ?> articles"><?php echo $tag->name() ?></a>
			                    </div>
		                	<?php endforeach ?>
                        </div>
                    </div>
                    <div class="uk-width-6-10">
                        <div class="search-area-container">
                            <ul class="search-area">
                                <li class="search-form">
                                <form action="<?php echo url()?>/search" id="search-formArticle">
                                    <span class="uk-icon-search" id="articleSearch"></span>
                                    <input placeholder="Search" id="searchField" name="search-field">
                                    <input type="submit" id="ccc" style="visibility: hidden;">
                                </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END DESKTOP -->
        </div>
        <!--end tag section container-->
    </section>
    <!-- END OF TAGS AND SEARCH AREA  -->