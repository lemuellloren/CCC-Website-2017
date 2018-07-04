<!-- THE CONTACT US  -->
    <section id="contact-section" class="contact-us" style=" z-index: 5;">
        <!--Smooth Scroll Menu Link-->
        <div id="contact-scroll"></div>
        <!--Smooth Scroll Menu Link-->
        <div class="map-container">
            <?php echo $site->location()->html(); ?>
            <div class="uk-overlay-panel" id="toggle-cover" data-uk-toggle="{target:'#toggle-cover'}"></div>
        </div>
        <!-- MOBILE TABLET  -->
        <div class="uk-hidden-large">
            <div class="map-content uk-container">
                <h1><?php echo $site->header_title()->text() ?></h1>
                <ul>
                    <li>
                        <span class="uk-icon-map-marker"></span><?php echo $site->address()->kt() ?></li>
                    <li>
                        <a href="mailto:<?php echo str::encode($site->email()) ?>" class="hvr-icon-wobble-horizontal">
                            <span class="uk-icon-hover uk-icon-envelope"></span><?php echo str::encode($site->email()) ?></a>
                    </li>
                </ul>
                <?php if($site->visit_facebook()->isNotEmpty() || $site->visit_twitter()->isNotEmpty() || $site->visit_instagram()->isNotEmpty() || $site->visit_youtube()->isNotEmpty() || $site->visit_tumblr()->isNotEmpty() || $site->visit_googleplus()->isNotEmpty()) : ?>
                <div class="contactUs-social">
                    <ul class="contactshare-list">
                        <p class="share-on-sm"><?php echo $site->visit_share_text()->text() ?></p>
                    <?php if($site->visit_facebook()->isNotEmpty()): ?>    
                        <li class="contactUs-group">
                            <a href="<?php echo $site->visit_facebook() ?>" class="contactUs-icon hvr-icon-wobble-horizontal"
                                target="_blank">
                                <span class="uk-icon-hover uk-icon-facebook" title="facebook"></span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if($site->visit_twitter()->isNotEmpty()): ?>
                        <li class="contactUs-group">
                            <a href="<?php echo $site->visit_twitter() ?>"
                                class="contactUs-icon hvr-icon-wobble-horizontal" target="_blank">
                                <span class="uk-icon-hover uk-icon-twitter" title="twitter"></span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if($site->visit_linkedin()->isNotEmpty()): ?>    
                        <li class="contactUs-group">
                            <a href="<?php echo $site->visit_linkedin() ?>" target="_blank">
                                <span class="uk-icon-hover uk-icon-linkedin" title="linkedin"></span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if($site->visit_pinterest()->isNotEmpty()): ?>    
                        <li class="contactUs-group">
                            <a href="<?php echo $site->visit_pinterest() ?>"
                                class="contactUs-icon hvr-icon-wobble-horizontal" target="_blank">
                                <span class="uk-icon-hover uk-icon-pinterest-p" title="pinterest"></span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if($site->visit_instagram()->isNotEmpty()): ?>    
                        <li class="contactUs-group">
                            <a href="<?php echo $site->visit_instagram() ?>" class="contactUs-icon hvr-icon-wobble-horizontal" target="_blank">
                                <span class="uk-icon-hover uk-icon-instagram" title="instagram"></span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if($site->visit_youtube()->isNotEmpty()): ?>    
                        <li class="contactUs-group">
                            <a href="<?php echo $site->visit_youtube() ?>" class="contactUs-icon hvr-icon-wobble-horizontal" target="_blank">
                                <span class="uk-icon-hover uk-icon-youtube-play" title="youtube"></span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if($site->visit_tumblr()->isNotEmpty()): ?>    
                        <li class="contactUs-group">
                            <a href="<?php echo $site->visit_tumblr() ?>" class="contactUs-icon hvr-icon-wobble-horizontal" target="_blank">
                                <span class="uk-icon-hover uk-icon-tumblr" title="tumblr"></span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if($site->visit_googleplus()->isNotEmpty()): ?>    
                        <li class="contactUs-group">
                            <a href="<?php echo $site->visit_googleplus() ?>" class="contactUs-icon hvr-icon-wobble-horizontal" target="_blank">
                                <span class="uk-icon-hover uk-icon-google-plus" title="google plus"></span>
                            </a>
                        </li>
                    <?php endif ?> 
                    </ul>
                </div>
                <?php endif ?>
                <?php if($callnow_button_text = $site->callnow_button_text()->text()->isNotEmpty()): ?>
                        <a href="tel:<?php echo $site->phone()->text() ?>" class="call-button-contact hvr-icon-wobble-horizontal">
                        <?php if($callnow_button_icon = $site->callnow_button_icon()->text()->isNotEmpty()): ?>
                            <span class="uk-icon-<?php echo $site->callnow_button_icon()->text() ?>"></span>
                        <?php else : ?>
                            <span class="uk-icon-phone"></span>
                        <?php endif ?>
                        <?php echo $site->callnow_button_text()->text() ?></a>
                    <?php else : ?>
                    <?php endif ?>
                    <?php if($appointment_button_text = $site->appointment_button_text()->text()->isNotEmpty()): ?>
                        <a href="#booking" data-uk-modal class="book-button-contact hvr-icon-wobble-horizontal">
                        <?php if($appointment_button_icon = $site->appointment_button_icon()->text()->isNotEmpty()): ?>
                            <span class="uk-icon-<?php echo $site->appointment_button_icon()->text() ?>"></span>
                            <?php else : ?>
                            <span class="uk-icon-calendar-plus-o"></span>    
                            <?php endif ?>
                            <?php echo $site->appointment_button_text()->text() ?></a>
                            <?php else : ?>
                            <?php endif ?>
            </div>
        </div>
        <!--end hidden div -->
        <!-- END MOBILE TABLET  -->
        <!-- DESKTOP -->
        <div class="uk-visible-large">
            <div class="map-content uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <h1><?php echo $site->header_title()->text() ?></h1>
                        <div class="extra-text"></div>
                    </div>
                    <div class="uk-width-1-2">
                        <ul>
                            <li>
                                <a href="mailto:<?php echo str::encode($site->email()) ?>" class="hvr-icon-wobble-horizontal">
                                    <span class="uk-icon-hover uk-icon-envelope"></span> &nbsp; <?php echo str::encode($site->email()) ?></a>
                            </li>
                        </ul>
                        <?php if($site->visit_facebook()->isNotEmpty() || $site->visit_twitter()->isNotEmpty() || $site->visit_instagram()->isNotEmpty() || $site->visit_youtube()->isNotEmpty() || $site->visit_tumblr()->isNotEmpty() || $site->visit_googleplus()->isNotEmpty()) : ?>
                        <div class="contactUs-social">
                            <ul class="contactshare-list">
                                <li class="contactUs-group share-on"><?php echo $site->visit_share_text()->text() ?></li>
                            <?php if($site->visit_facebook()->isNotEmpty()): ?>
                                <li class="contactUs-group">
                                    <a href="<?php echo $site->visit_facebook() ?>" class="contactUs-icon hvr-icon-wobble-horizontal"
                                        target="_blank">
                                        <span class="uk-icon-hover uk-icon-facebook" title="facebook"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if($site->visit_twitter()->isNotEmpty()): ?>
                                <li class="contactUs-group">
                                    <a href="<?php echo $site->visit_twitter() ?>"
                                        class="contactUs-icon hvr-icon-wobble-horizontal" target="_blank">
                                        <span class="uk-icon-hover uk-icon-twitter" title="twitter"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if($site->visit_instagram()->isNotEmpty()): ?>
                                <li class="contactUs-group">
                                    <a href="<?php echo $site->visit_instagram() ?>" class="contactUs-icon hvr-icon-wobble-horizontal" target="_blank">
                                        <span class="uk-icon-hover uk-icon-instagram" title="instagram"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if($site->visit_youtube()->isNotEmpty()): ?>
                                <li class="contactUs-group">
                                    <a href="<?php echo $site->visit_youtube() ?>" class="contactUs-icon hvr-icon-wobble-horizontal" target="_blank">
                                        <span class="uk-icon-hover uk-icon-youtube-play" title="youtube"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if($site->visit_tumblr()->isNotEmpty()): ?>
                                <li class="contactUs-group">
                                    <a href="<?php echo $site->visit_tumblr() ?>" class="contactUs-icon hvr-icon-wobble-horizontal" target="_blank">
                                        <span class="uk-icon-hover uk-icon-tumblr" title="tumblr"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if($site->visit_googleplus()->isNotEmpty()): ?>
                                <li class="contactUs-group">
                                    <a href="<?php echo $site->visit_googleplus() ?>" class="contactUs-icon hvr-icon-wobble-horizontal" target="_blank">
                                        <span class="uk-icon-hover uk-icon-google-plus" title="google plus"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            </ul>
                        </div>
                    <?php else: ?>
                        <div class="contactUs-social" style="padding-bottom: 50px"></div>
                    <?php endif ?>
                    <?php if($callnow_button_text = $site->callnow_button_text()->text()->isNotEmpty()): ?>
                        <a href="tel:<?php echo $site->phone()->text() ?>" class="call-button-contact hvr-icon-wobble-horizontal">
                        <?php if($callnow_button_icon = $site->callnow_button_icon()->text()->isNotEmpty()): ?>
                            <span class="uk-icon-<?php echo $site->callnow_button_icon()->text() ?>"></span>
                        <?php else : ?>
                            <span class="uk-icon-phone"></span>
                        <?php endif ?>
                        <?php echo $site->callnow_button_text()->text() ?></a>
                    <?php else : ?>
                    <?php endif ?>
                    <?php if($appointment_button_text = $site->appointment_button_text()->text()->isNotEmpty()): ?>
                        <a href="#booking" data-uk-modal class="book-button-contact hvr-icon-wobble-horizontal">
                        <?php if($appointment_button_icon = $site->appointment_button_icon()->text()->isNotEmpty()): ?>
                            <span class="uk-icon-<?php echo $site->appointment_button_icon()->text() ?>"></span>
                            <?php else : ?>
                            <span class="uk-icon-calendar-plus-o"></span>    
                            <?php endif ?>
                            <?php echo $site->appointment_button_text()->text() ?></a>
                            <?php else : ?>
                            <?php endif ?>
                    </div>
                    <div class="uk-width-1-2">
                        <div class="contact-address">
                            <ul>
                                <li>
                                    <span class="uk-icon-map-marker"></span><div class="kirbyText"><?php echo $site->address()->kt() ?></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end hidden div -->
        <!-- END DESKTOP  -->
    </section>
    <!-- END OF THE CONTACT US  -->
    <!-- CONTACT US FORM -->
    <section id="<?php echo str::slug($data->uid())?>-section" class="contact-us-form" style="z-index: 4;">
        <!--Smooth Scroll Menu Link-->
        <div id="form-scroll"></div>
        <!--Smooth Scroll Menu Link-->
        <div class="form-container">
            <div class="form-div">
                <h1><?php echo $site->contact_header_title()->text()?></h1>
                <?php echo $site->contact_sub_title()->kt()?>
            </div>
            <form id="message-us-form">
                <div class="uk-grid message-us-form-cont">
                    <div class="uk-width-large-1-2 uk-width-medium-1-1 half-left">
                        <span class="input input--minoru">
                            <input class="input__field input__field--minoru" type="text" id="fullname" name="fullname" placeholder="<?php echo $site->fullname_placeholder()->text()?>" required>
                            <label class="input__label input__label--minoru" for="fullname">

                            </label>
                        </span>
                        <span class="input input--minoru">
                            <input class="input__field input__field--minoru" type="email" id="email" name="email" placeholder="<?php echo $site->enail_placeholder()->text()?>" required>
                            <label class="input__label input__label--minoru" for="email">

                            </label>
                        </span>
                        <span class="input input--minoru">
                            <input class="input__field input__field--minoru" type="text" id="contact" name="contact" placeholder="<?php echo $site->phone_placeholder()->text()?>" required>
                            <label class="input__label input__label--minoru" for="contact">

                            </label>
                        </span>
                    </div>
                    <div class="uk-width-large-1-2 uk-width-medium-1-1 half-right">
                        <span class="input input--minoru">
                            <textarea class="input__field input__field--minoru" name="message" placeholder="<?php echo $site->message_placeholder()->text()?>" id="message" cols="30" rows="5"
                                required></textarea>
                            <label class="input__label input__label--minoru" for="contact">

                            </label>
                        </span>
                    </div>
                        <span class="form-result uk-hidden-large uk-hidden" style="flex: auto"><img src="<?php echo url('assets/images/loading.gif'); ?>"> <?php echo $site->loading_sending_message()->text() ?></span>
                </div>
                <span class="form-result uk-visible-large uk-hidden" style="flex: auto"><img src="<?php echo url('assets/images/loading.gif'); ?>"> <?php echo $site->loading_sending_message()->text() ?></span>
                <!--grid-->
            <?php if($contact_button_text = $site->contact_button_text()->text()->isNotEmpty()): ?>
                <button class="message-us-btn hvr-icon-wobble-horizontal" type="submit" name="submit" form="message-us-form" value="Submit"><?php echo $site->contact_button_text()->text() ?>
                <?php if($contact_button_icon = $site->contact_button_icon()->text()->isNotEmpty()): ?>
                    <span class="uk-icon-<?php echo $site->contact_button_icon()->text() ?>"></span></button>
                <?php else : ?>
                    <span class="uk-icon-envelope"></span></button>
                <?php endif ?>
                
            <?php else : ?>
                <button class="message-us-btn hvr-icon-wobble-horizontal" type="submit" name="submit" form="message-us-form" value="Submit">Send Message<span class="uk-icon-envelope"></span></button>
            <?php endif ?>
                <div class="call-now">
                    <?php if($callnow_button_text = $site->callnow_button_text()->text()->isNotEmpty()): ?>
                        <a href="tel:<?php echo $site->phone()->text() ?>" class="call-button-blog hvr-icon-wobble-horizontal"><?php echo $site->callnow_button_text()->text() ?>
                        <?php if($callnow_button_icon = $site->callnow_button_icon()->text()->isNotEmpty()): ?>
                            <span class="uk-icon-<?php echo $site->callnow_button_icon()->text() ?>"></span>
                        <?php else : ?>
                            <span class="uk-icon-phone"></span>
                        <?php endif ?></a>
                    <?php else : ?>
                    <?php endif ?>
                </div>
                    <input type="hidden" id="subject" name="subject" value="<?php echo $site->contact_email_subject()->text() ?>">
                    <input type="hidden" id="successMessage" name="successMessage" value="<?php echo $site->contact_success_message()->value() ?>">
                    <input type="hidden" id="recipient" name="recipient" value="<?php echo str::encode($site->contact_email_recipient()) ?>">
            </form>
        </div>
    </section>
    <!-- END OF CONTACT US FORM -->
<?php snippet('blog'); ?>
<?php snippet('partners'); ?>