<?php snippet('menu'); ?>
<!-- HERO BANNER -->
<?php if($hero_background_image = page('home/hero')->image(page('home/hero')->hero_background_image())): ?>
<section id="hero-banner" class="hero-banner uk-container" style="">
    <div class="hero-90vh" style="z-index: 10; background: linear-gradient(rgba(29, 51, 74,.8), rgba(29, 51, 74,.8)), url('<?= thumb($hero_background_image,array('width'=>2000, 'height'=>1500, 'crop'=>true))->url() ?>') no-repeat center center fixed;background-size: cover; background-attachment: initial">
<?php else: ?>
<section id="hero-banner" class="hero-banner uk-container" style="">
    <div class="hero-90vh" style="z-index: 10; background: rgb(61, 77, 97)">
<?php endif ?>
           <div class="container">
            <div class="logo">
            <?php if($website_logo = $site->image($site->website_logo())): ?>
                    <img src="<?= $website_logo->resize(150, 65, 100)->url() ?>" alt="<?php echo $website_logo->alt_text() ?>">
            <?php endif ?>
                <h1><?php  echo page('home/hero')->hero_title()->html(); ?></h1>
            </div>
            <div class="slideshow uk-slidenav-position" data-uk-slideshow="{autoplay:true}">
                <ul class="uk-slideshow">
                    <?php $slideText = page('home/hero')->hero_slide_text()->toStructure(); foreach($slideText as $item): ?>
                    <li>
                        <?php  echo $item->hero_slide()->kt(); ?>
                    </li>
                <?php endforeach ?> 
            </ul>
            <div class="booking-btn">
                <?php if($appointment_button_text = $site->appointment_button_text()->text()->isNotEmpty()): ?>
                    <a href="#booking" data-uk-modal class="book-button-zombie hvr-icon-wobble-horizontal"><?php echo $site->appointment_button_text()->text() ?>
                        <?php if($appointment_button_icon = $site->appointment_button_icon()->text()->isNotEmpty()): ?>
                            <span class="uk-icon-<?php echo $site->appointment_button_icon()->text() ?>"></span>
                        <?php else : ?>
                            <span class="uk-icon-calendar-plus-o"></span>
                        <?php endif ?>
                    </a>
                <?php else : ?>

                <?php endif ?>
            </div>
            <div class="hero-btn">
                <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-left">
                    <?php  
                    $countBullet = page('home/hero')->hero_slide_text()->toStructure()->count();

                    if($countBullet == 0 || $countBullet == 1){
                    } else {
                        for ($i=0; $i < $countBullet; $i++) {
                            echo '<li data-uk-slideshow-item="'.$i.'">
                            <a href=""></a>
                            </li>';  
                        }
                    } 
                    ?>
                </ul>
            </div>

            <?php if(page('home/promo')->ispromo()->text() == '1') {
                $href = '#'.page('home/promo')->uid().'-section';
            } else {
                $href = '#'.page('home/what-we-treat')->uid().'-section';
            } ?>
            <a href="<?php echo $href ?>" class="next-section-btn" data-uk-smooth-scroll="{offset: -30}">
                <span class="uk-icon-angle-down"></span>
            </a>
        </div>
    </div>
</section>
<!-- END OF HERO BANNER  -->