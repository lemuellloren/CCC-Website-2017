<nav>
    <div class="uk-hidden-large nav-container">
        <ul>
            <li>
                <a class="icon-nav hvr-icon-wobble-horizontal" href="blog">
                    <span class="uk-icon-rss" title="<?php echo $site->blog_icon_tooltip()->text() ?>"></span>
                </a>
            </li>
            <li class="uk-parent" data-uk-dropdown="{pos:'bottom-center'}">
                <span class="icon-nav hvr-icon-wobble-horizontal">
                    <span class="uk-icon-phone" title="<?php echo $site->phone_icon_tooltip()->text() ?>"></span>
                </span>
                <div class="uk-dropdown uk-dropdown-navbar call-nav">
                    <div class="arrow-up"></div>
                    <ul class="uk-nav uk-nav-navbar">
                        <li>
                            <a href="tel:<?php echo $site->phone()->text() ?>" class="contact-num">
                                <?php echo $site->phone_text()->text() ?></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#booking" data-uk-modal class="icon-nav hvr-icon-wobble-horizontal">
                        <span class="uk-icon-calendar-plus-o" title="<?php echo $site->book_now_tooltip()->text() ?>"></span>
                    </a>
                </li>
                <li>
                    <a href="#map" class="icon-nav map-modal hvr-icon-wobble-horizontal" data-uk-modal>
                        <span class="uk-icon-map-marker" title="<?php echo $site->map_icon_tooltip()->text() ?>"></span>
                    </a>
                </li>
                <?php if($site->share_facebook() == "1" || $site->share_twitter() == "1" || $site->share_linkedin() == "1" || $site->share_pinterest() == "1" || $site->share_tumblr() == "1" || $site->share_reddit() == "1" || $site->share_googleplus() == "1" || $site->share_email() == "1"): ?>
                <li class="uk-parent" data-uk-dropdown="{pos:'bottom-center'}">
                    <span class="icon-nav hvr-icon-wobble-horizontal">
                        <span class="uk-icon-share-alt" title="<?php echo $site->share_icon_tooltip()->text() ?>"></span>
                    </span>
                    <div class="uk-dropdown uk-dropdown-navbar share-nav">
                        <div class="arrow-up"></div>
                        <ul class="uk-nav uk-nav-navbar">
                            <li><?php echo $site->social_share_text() ?></li>
                            <?php if($site->share_facebook()->bool()):?>    
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo url() ?>" class="hvr-icon-wobble-horizontal menu-share"
                                        target="_blank">
                                        <span class="uk-icon-facebook" title="facebook"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if($site->share_twitter()->bool()):?>
                                <li>
                                    <a href="https://twitter.com/share?url=<?php echo url() ?>&text=<?php echo $site->title()->text()?>%2F&hashtags=<?php echo $site->keyword()->text()?>"
                                        class="hvr-icon-wobble-horizontal menu-share" target="_blank">
                                        <span class="uk-icon-twitter" title="twitter"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if($site->share_linkedin()->bool()):?>
                                <li>
                                    <a href="http://www.linkedin.com/shareArticle?url=<?php echo url() ?>%2F&title=<?php echo $site->title()->text()?>%2F"
                                        class="hvr-icon-wobble-horizontal menu-share" target="_blank">
                                        <span class="uk-icon-linkedin" title="linkedin"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if($site->share_pinterest()->bool()):?>
                            <?php if($website_logo = $site->website_logotwo()->toFile()): ?>
                                <li>
                                    <a href="https://pinterest.com/pin/create/button/?url=<?php echo url() ?>&media=<?= $website_logo->url() ?>&description=<?php echo $site->description()->text()?>"
                                        class="hvr-icon-wobble-horizontal menu-share" target="_blank">
                                        <span class="uk-icon-pinterest-p" title="pinterest"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php endif ?>
                            <?php if($site->share_tumblr()->bool()):?>
                                <li>
                                    <a href="http://www.tumblr.com/share/link?url=<?php echo url() ?>%2F&name=<?php echo $site->title()->text()?>%2F"
                                        class="hvr-icon-wobble-horizontal menu-share" target="_blank">
                                        <span class="uk-icon-tumblr" title="tumblr"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if($site->share_reddit()->bool()):?>
                                <li>
                                    <a href="http://reddit.com/submit?url=<?php echo url() ?>%2F&title=<?php echo $site->title()->text()?>"
                                        class="hvr-icon-wobble-horizontal menu-share" target="_blank">
                                        <span class="uk-icon-reddit-alien" title="reddit"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if($site->share_googleplus()->bool()):?>
                                <li>
                                    <a href="https://plus.google.com/share?url=<?php echo url() ?>"
                                        class="hvr-icon-wobble-horizontal menu-share" target="_blank">
                                        <span class="uk-icon-google-plus" title="google plus"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if($site->share_email()->bool()):?>
                                <li>
                                    <a href="mailto:?subject=Checkout <?php echo $site->title()->text()?> &amp;body=Check out this site <?php echo url() ?>." title="Share by Email" class="hvr-icon-wobble-horizontal menu-share"
                                        class="hvr-icon-wobble-horizontal menu-share" target="_blank">
                                        <span class="uk-icon-envelope" title="email"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                        </ul>
                    </div>
                </li>
                <?php endif ?>
                <li class="uk-parent" data-uk-dropdown="{pos:'bottom-center'}">
                    <span class="icon-nav hvr-icon-wobble-horizontal">
                        <span class="uk-icon-search" title="<?php echo $site->search_icon_tooltip()->text() ?>"></span>
                    </span>
                    <div class="uk-dropdown uk-dropdown-navbar search-nav">
                        <div class="arrow-up"></div>
                        <ul class="uk-nav uk-nav-navbar">
                            <li class="search-form">
                                <form action="<?php echo url()?>/search" id="search-form">
                                    <span class="uk-icon-search" title="<?php echo $site->search_icon_tooltip()->text() ?>"></span>
                                    <input placeholder="Search" id="searchField" name="search-field">
                                    <input type="submit" id="ccc" style="visibility: hidden;">
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#menu" class="icon-nav hvr-icon-wobble-horizontal" data-uk-offcanvas>
                        <span class="uk-icon-bars" title="site menu"></span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END MOBILE NAVIGATION  -->
        <!-- DESKTOP NAVIGATION  -->
        <div class="uk-visible-large nav-container">
            <ul>
                <?php if(page('home/promo')->ispromo()->text() == '1') : ?>
                    <li class="desktop-menu"><a class="text-menu" data-uk-smooth-scroll="{offset: -30}" href="#<?php echo page('home/promo')->uid()?>-section"><?php echo page('home/promo')->title()->title()->upper()?></a></li>            
                <?php else : ?>
                    <style type="text/css">
                    nav div {
                        width: 870px;
                    }
                    @media (max-width: 767px) {
                        nav div {
                            width: 254px;
                        }
                    }
                </style>
            <?php endif ?>
            <li class="desktop-menu">
                <a class="text-menu" data-uk-smooth-scroll="{offset: -30}" href="#what-we-treat-section"><?php echo page('home/what-we-treat')->title()->upper() ?></a>
            </li>

            <li class="desktop-menu">
                <a class="text-menu" data-uk-smooth-scroll="{offset: -30}" href="#services-section"><?php echo page('home/services')->title()->upper() ?></a>
            </li>

            <li class="desktop-menu">
                <a class="text-menu" data-uk-smooth-scroll="{offset: -30}" href="#who-we-are-section"><?php echo page('home/who-we-are')->title()->upper() ?></a>
            </li>

            <li class="desktop-menu">
                <a class="text-menu" data-uk-smooth-scroll="{offset: -30}" href="#contact-us-section">CONTACT US</a>
            </li>

            <li class="desktop-menu">
                <a class="icon-nav hvr-icon-wobble-horizontal" href="blog">
                    <span class="uk-icon-rss" title="<?php echo $site->blog_icon_tooltip()->text() ?>">
                </a>
            </li>
                    <li class="desktop-menu uk-parent" data-uk-dropdown="{pos:'bottom-center'}">
                        <span class="icon-nav hvr-icon-wobble-horizontal">
                            <span class="uk-icon-phone" title="<?php echo $site->phone_icon_tooltip()->text() ?>"></span>
                        </span>
                        <div class="uk-dropdown uk-dropdown-navbar call-nav">
                            <div class="arrow-up"></div>
                            <ul class="uk-nav uk-nav-navbar">
                                <li>
                                    <a href="tel:<?php echo $site->phone()->text() ?>" class="contact-num">
                                        <?php echo $site->phone_text()->text() ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="desktop-menu">
                        <a href="#booking" data-uk-modal class="icon-nav hvr-icon-wobble-horizontal">
                            <span class="uk-icon-calendar-plus-o" title="<?php echo $site->book_now_tooltip()->text() ?>"></span>
                        </a>
                    </li>
                    <li class="desktop-menu">
                        <a href="#map" class="icon-nav map-modal hvr-icon-wobble-horizontal" data-uk-modal>
                            <span class="uk-icon-map-marker" title="<?php echo $site->map_icon_tooltip()->text() ?>"></span>
                        </a>
                    </li>
                    <?php if($site->share_facebook() == "1" || $site->share_twitter() == "1" || $site->share_linkedin() == "1" || $site->share_pinterest() == "1" || $site->share_tumblr() == "1" || $site->share_reddit() == "1" || $site->share_googleplus() == "1" || $site->share_email() == "1"): ?>
                    <li class="desktop-menu uk-parent" data-uk-dropdown="{pos:'bottom-center'}">
                        <span class="icon-nav hvr-icon-wobble-horizontal">
                            <span class="uk-icon-share-alt" title="<?php echo $site->search_icon_tooltip()->text() ?>"></span>
                        </span>
                        <div class="uk-dropdown uk-dropdown-navbar share-nav">
                            <div class="arrow-up"></div>
                            <ul class="uk-nav uk-nav-navbar">
                                <li><?php echo $site->social_share_text()->text()?></li>
                                <?php if($site->share_facebook()->bool()):?>    
                                    <li>
                                        <a title="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo url() ?>" class="contact-icon hvr-icon-wobble-horizontal"
                                            target="_blank">
                                            <span class="uk-icon-facebook"></span>
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if($site->share_twitter()->bool()):?>
                                    <li>
                                        <a title="twitter" href="https://twitter.com/share?url=<?php echo url() ?>&text=<?php echo $site->title()->text()?>%2F&hashtags=<?php echo $site->keyword()->text()?>"
                                            class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                                            <span class="uk-icon-twitter"></span>
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if($site->share_linkedin()->bool()):?>
                                    <li>
                                        <a title="linkedin" href="http://www.linkedin.com/shareArticle?url=<?php echo url() ?>%2F&title=<?php echo $site->title()->text()?>%2F"
                                            class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                                            <span class="uk-icon-linkedin"></span>
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if($site->share_pinterest()->bool()):?>
                                    <li>
                                        <a title="pinterest" href="https://pinterest.com/pin/create/button/?url=<?php echo url() ?>&media=<?= $website_logo->url() ?>&description=<?php echo $site->description()->text()?>"
                                            class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                                            <span class="uk-icon-pinterest-p"></span>
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if($site->share_tumblr()->bool()):?>
                                    <li>
                                        <a title="tumblr" href="http://www.tumblr.com/share/link?url=<?php echo url() ?>%2F&name=<?php echo $site->title()->text()?>%2F"
                                            class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                                            <span class="uk-icon-tumblr"></span>
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if($site->share_reddit()->bool()):?>
                                    <li>
                                        <a title="reddit" href="http://reddit.com/submit?url=<?php echo url() ?>%2F&title=<?php echo $site->title()->text()?>"
                                            class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                                            <span class="uk-icon-reddit-alien"></span>
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if($site->share_googleplus()->bool()):?>
                                    <li>
                                        <a href="https://plus.google.com/share?url=<?php echo url() ?>"
                                            class="hvr-icon-wobble-horizontal menu-share" target="_blank">
                                            <span class="uk-icon-google-plus" title="google plus"></span>
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if($site->share_email()->bool()):?>
                                    <li>
                                        <a href="mailto:?subject=Checkout <?php echo $site->title()->text()?> &amp;body=Check out this site <?php echo url() ?>."
                                         title="Share by Email"
                                         class="hvr-icon-wobble-horizontal menu-share" target="_blank">
                                         <span class="uk-icon-envelope" title="email"></span>
                                     </a>
                                 </li>
                             <?php endif ?>
                         </ul>
                     </div>
                 </li>
                <?php endif ?>
                 <li class="uk-parent" data-uk-dropdown="{pos:'bottom-center'}">
                    <span class="icon-nav hvr-icon-wobble-horizontal">
                        <span class="uk-icon-search" title="<?php echo $site->search_icon_tooltip()->text() ?>"></span>
                    </span>
                    <div class="uk-dropdown uk-dropdown-navbar search-nav">
                        <div class="arrow-up"></div>
                        <ul class="uk-nav uk-nav-navbar">
                            <li class="search-form">
                                <form action="<?php echo url()?>/search" id="search-formMain">
                                    <span class="uk-icon-search" id="formMain" title="<?php echo $site->search_icon_tooltip()->text() ?>"></span>
                                    <input placeholder="<?php echo $site->search_placeholder_text()->text() ?>" id="searchField" name="search-field">
                                    <input type="submit" id="ccc" style="visibility: hidden;">
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- END DESKTOP NAVIGATION  -->
    </nav>