<!-- PROMO  -->
<?php if (page('home/promo')->ispromo()->text() == '1') : ?>
    <?php if($promo_background_image = $data->image($data->promo_background_image())): ?>
        <section id="<?php echo str::slug($data->uid())?>-section" class="promo uk-container" style="z-index: 9; background: linear-gradient(rgba(233, 217, 160,.8), rgba(233, 217, 160,.8)), url('<?= thumb($promo_background_image,array('width'=>1200, 'height'=>630, 'crop'=>true))->url() ?>') no-repeat center center; background-size: cover; background-attachment: initial"> 
    <?php else : ?>
        <section id="<?php echo str::slug($data->uid())?>-section" class="promo uk-container" style="z-index: 9; background: #E9D9A0">
    <?php endif ?>
        <!--Smooth Scroll Menu Link-->
        <div id="promo-scroll"></div>
        <!--Smooth Scroll Menu Link-->
        <div class="promo-container">
            <h1>
                <strong><?php echo $data->promo_name()->text(); ?></strong>
            </h1>
            <div class="promo-content">
                <?php  echo $data->promo_content()->kt(); ?>
            </div>
            <?php if($data->promo_goto_btn()->text()->isNotEmpty()): ?>
            <a href="<?php echo $data->promo_goto_url() ?>" target="_blank" class="book-button-white hvr-icon-wobble-horizontal">
                <span class="uk-icon-globe"></span>
                <?php echo $data->promo_goto_btn()->text() ?></a>
            <?php endif ?> 
            <?php if($data->hero_download_btn()->text()->isNotEmpty() && $file = $data->hero_download_file()->toFile()): ?>
            <a href="<?php echo $file->url() ?>" target="_blank" class="book-button-white hvr-icon-wobble-horizontal">
                 <span class="uk-icon-download"></span>
                 <?php echo $data->hero_download_btn()->text() ?></a>
            <?php endif ?>  
            <?php if($data->hero_call_btn()->text()->isNotEmpty()): ?>
            <a href="tel:<?php echo $site->phone()->text() ?>" class="book-button-white hvr-icon-wobble-horizontal">
                <?php if($appointment_button_icon = $site->callnow_button_icon()->text()->isNotEmpty()): ?>
                <span class="uk-icon-<?php echo $site->callnow_button_icon()->text() ?>"></span>
                <?php echo $data->hero_call_btn()->text() ?></a>
                <?php endif ?>
            <?php endif ?>  
            <?php if($appointment_button_text = $data->hero_book_btn()->text()->isNotEmpty()): ?>
            <a href="#booking" data-uk-modal class="book-button-white hvr-icon-wobble-horizontal">
                <?php if($appointment_button_icon = $site->appointment_button_icon()->text()->isNotEmpty()): ?>
                <span class="uk-icon-<?php echo $site->appointment_button_icon()->text() ?>"></span>
                <?php echo $data->hero_book_btn()->text() ?></a>
                <?php endif ?>
            <?php endif ?>  
        </div>
    </section>
<?php endif ?>
<!-- END OF PROMO  -->