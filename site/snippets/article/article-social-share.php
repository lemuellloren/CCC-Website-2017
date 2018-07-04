<?php if($site->share_facebook() == "1" || $site->share_twitter() == "1" || $site->share_linkedin() == "1" || $site->share_pinterest() == "1" || $site->share_tumblr() == "1" || $site->share_reddit() == "1" || $site->share_googleplus() == "1" || $site->share_email() == "1"): ?>
    <!--  BLOG AREA ARTICLE SOCIAL MEDIA SHARE -->
    <section id="Sharing-section" class="sharing-section" style="z-index: 8;">
        <div class="socialSharing-container">
            <center>
                <div class="shareIcons">
                    <ul class="shareIcons-list">
                        <li class="share-group">
                        <p><?php echo $site->social_share_text()->text()?></p>
                    </li>
                <?php if($site->share_facebook()->bool()):?>
                    <li class="share-group">
                        <a title="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo url::current() ?>" class="contact-icon hvr-icon-wobble-horizontal"
                            target="_blank">
                            <span class="uk-icon-facebook"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if($site->share_twitter()->bool()):?>
                    <li class="share-group">
                        <a title="twitter" href="https://twitter.com/share?url=<?php echo url::current() ?>&text=<?php echo $site->title()->text()?>%2F&hashtags=<?php echo $site->keyword()->text()?>"
                            class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                            <span class="uk-icon-twitter"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if($site->share_linkedin()->bool()):?>
                    <li class="share-group">
                        <a title="linkedin" href="http://www.linkedin.com/shareArticle?url=<?php echo url::current() ?>%2F&title=<?php echo $site->title()->text()?>%2F"
                            class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                            <span class="uk-icon-linkedin"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if($site->share_pinterest()->bool()):?>
                <?php if($website_logo = $site->website_logo()->toFile()): ?>
                    <li class="share-group">
                        <a title="pinterest" href="https://pinterest.com/pin/create/button/?url=<?php echo url::current() ?>&media=<?= $website_logo->url() ?>&description=<?php echo $site->description()->text()?>"
                            class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                            <span class="uk-icon-pinterest-p"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php endif ?>
                <?php if($site->share_tumblr()->bool()):?>
                    <li class="share-group">
                        <a title="tumblr" href="http://www.tumblr.com/share/link?url=<?php echo url::current() ?>%2F&name=<?php echo $site->title()->text()?>%2F"
                            class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                            <span class="uk-icon-tumblr"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if($site->share_reddit()->bool()):?>
                    <li class="share-group">
                        <a title="reddit" href="http://reddit.com/submit?url=<?php echo url::current() ?>%2F&title=<?php echo $site->title()->text()?>"
                            class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                            <span class="uk-icon-reddit-alien"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if($site->share_googleplus()->bool()):?>
                    <li class="share-group">
                        <a title="google plus" href="https://plus.google.com/share?url=<?php echo url::current() ?>"
                            class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                            <span class="uk-icon-google-plus"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if($site->share_email()->bool()):?>
                    <li class="share-group">
                        <a href="mailto:?subject=Checkout <?php echo $site->title()->text()?> &amp;body=Check out this site <?php echo url::current() ?>." title="Share by Email" class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                            <span class="uk-icon-envelope" title="email"></span>
                        </a>
                    </li>
                <?php endif ?>
                    </ul>
                </div>
            </center>
        </div>
    </section>
    <!-- END OF BLOG AREA ARTICLE SOCIAL MEDIA SHARE -->
<?php endif ?>