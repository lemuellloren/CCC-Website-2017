    <!-- THE PARTNERS SECTION -->
    <section id="partners-section" class="partners-section" style="z-index: 2;">
        <div class="partners-container">
            <h1><?php echo page('home/partners-and-friends')->partners_title()->text() ?></h1>
            <div class="partnersLogo">
                <div class="uk-slidenav-position" data-uk-slider="{ autoplay: true , autoplayInterval: 5000 }">
                    <div class="uk-slider-container">
                        <ul class="uk-slider uk-grid uk-grid-width-medium-1-4 uk-grid-width-large-1-5">
                        <?php $partner_items = page('home/partners-and-friends')->partner_items()->toStructure();
                            foreach($partner_items as $item): ?>
                            <li title="<?php echo $item->partner_name()->text(); ?>">
                                <?php if($item->partner_link()->isNotEmpty()) : ?>
                                    <a href="<?php echo $item->partner_link()->text(); ?>" target="blank">
                                        <?php if($partner_image = page('home/partners-and-friends')->image($item->partner_image())): ?>
                                            <img src="<?php echo $partner_image->resize(200, 200, 100)->url(); ?>" alt="<?php echo $partner_image->alt_text(); ?>">
                                        <?php endif ?>
                                    </a>
                                <?php else : ?>
                                    <?php if($partner_image = page('home/partners-and-friends')->image($item->partner_image())): ?>
                                        <img src="<?php echo $partner_image->url(); ?>" alt="<?php echo $partner_image->alt_text(); ?>">
                                    <?php endif ?>
                                <?php endif ?>
                            </li>
                        <?php endforeach ?>
                        </ul>
                    </div>
                    <a class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
                    <a class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
                </div>
            </div>
        </div>
        <div class="goTo-top-container">
            <a href="#hero-banner" data-uk-smooth-scroll="{offset: -30}">
                <div class="goTo-top">
                    <span class="uk-icon-angle-up"></span>
                </div>
            </a>
        </div>
    </section>
    <!-- END OF THE PARTNERS SECTION -->