<!-- ABOUT US  -->

    <section id="<?php echo str::slug($data->uid())?>-section" class="about" style="z-index: 6;">
        <!--Smooth Scroll Menu Link-->
        <div id="about-scroll"></div>
        <!--Smooth Scroll Menu Link-->
    <?php if($www_background_image = $data->image($data->www_background_image())): ?>
        <img class="cover-image" src="<?= thumb($www_background_image,array('width'=>1200, 'height'=>630))->url() ?>" alt="<?php echo $www_background_image->alt_text() ?>">
    <?php endif ?>
        <div id="aboutus-section" class="about-content uk-container">
            <div class="logo-aboutUs">
            <?php if($www_logo = $data->image($data->www_logo())): ?>
                <img class="logo-tab" src="<?php echo $www_logo->url() ?>" alt="<?php echo $www_logo->alt_text() ?>">
            <?php endif ?>
            </div>
            <div class="about-body">
                <h1><?php echo $data->www_title()->text()?></h1>
                <?php echo $data->www_content()->kt()?>
            </div>
            <div class="section-links">
                <?php if($callnow_button_text = $site->callnow_button_text()->text()->isNotEmpty()): ?>
                <a href="tel:<?php echo $site->phone()->text() ?>" class="call-button-about hvr-icon-wobble-horizontal"><?php echo $site->callnow_button_text()->text() ?>
                    <?php if($callnow_button_icon = $site->callnow_button_icon()->text()->isNotEmpty()): ?>
                    <span class="uk-icon-<?php echo $site->callnow_button_icon()->text() ?>"></span>
                    <?php else : ?>
                    <span class="uk-icon-phone"></span>    
                    <?php endif ?>
                </a>
                    <?php else : ?>
                    <?php endif ?>
                <?php if($appointment_button_text = $site->appointment_button_text()->text()->isNotEmpty()): ?>
                <a href="#booking" data-uk-modal class="book-button-about hvr-icon-wobble-horizontal"><?php echo $site->appointment_button_text()->text() ?>
                    <?php if($appointment_button_icon = $site->appointment_button_icon()->text()->isNotEmpty()): ?>
                    <span class="uk-icon-<?php echo $site->appointment_button_icon()->text() ?>"></span>
                    <?php else : ?>
                    <span class="uk-icon-calendar-plus-o"></span>
                    <?php endif ?>
                </a>
                <?php else : ?>
                <?php endif ?>
            </div>
        </div>
    </section>