<!-- SERVICES  -->
    <section id="<?php echo str::slug(page('home/services')->uid())?>-section" class="services" style="z-index: 7;">
        <!--Smooth Scroll Menu Link-->
        <div id="services-scroll"></div>
        <!--Smooth Scroll Menu Link-->
        <div class="service-container">
            <h1><?php echo $data->header_title()->text()?></h1>
            <!-- DESKTOP  -->
            <div>
                <div class="uk-accordion" data-uk-accordion="{collapse: false , showfirst: false }">
<!-- Displays Structure list  -->
               <?php $services_items = page('home/services')->services_items()->toStructure(); $no = 1;
                    foreach($services_items as $item): ?>
                    <?php if ($no % 2 == 0) : ?>
                    <div class="accordion-container left-acc">
                        <h2 class="uk-accordion-title hvr-icon-wobble-horizontal"><?php echo $item->services_name()->text(); ?>
                            <span class="uk-icon-angle-left"></span>
                        </h2>
                    <?php else : ?>
                    <div class="accordion-container right-acc">
                        <h2 class="uk-accordion-title hvr-icon-wobble-horizontal"><?php echo $item->services_name()->text(); ?>
                            <span class="uk-icon-angle-right"></span>
                        </h2>
                    <?php endif ?>
                        <div class="uk-accordion-content">
                            <div class="service-content">
                                <div class="img-cont">
                                <?php if($services_featured_image = page('home/services')->image($item->services_featured_image())): ?>
                                    <img src="<?php echo $services_featured_image->url(); ?>" alt="<?php echo $services_featured_image->alt_text() ?>">
                                 <?php endif ?>   
                                </div><?php echo $item->services_content()->kt(); ?></div>
                            <!-- Displays Appointment Button  -->
                            <?php if($appointment_button_text = $site->appointment_button_text()->text()->isNotEmpty()): ?>
<!-- If Position is right : Display the Button icon in Left  -->
                                <?php if ($no % 2 == 0) : ?>
                                    <a href="#booking" data-uk-modal class="book-button-left-services hvr-icon-wobble-horizontal">
                                        <?php echo $site->appointment_button_text()->text() ?>
                                    <?php if($appointment_button_icon = $site->appointment_button_icon()->text()->isNotEmpty()): ?>
                                        <span class="uk-icon-<?php echo $site->appointment_button_icon()->text() ?>"></span>        
                                    <?php else : ?>                        
                                        <span class="uk-icon-calendar-plus-o"></span>
                                    <?php endif ?></a>
                                <?php else : ?>
                                    <a href="#booking" data-uk-modal class="book-button-right-services hvr-icon-wobble-horizontal">
                                <?php if($appointment_button_icon = $site->appointment_button_icon()->text()->isNotEmpty()): ?>
                                        <span class="uk-icon-<?php echo $site->appointment_button_icon()->text() ?>"></span>        
                                    <?php else : ?>                        
                                        <span class="uk-icon-calendar-plus-o"></span>
                                    <?php endif ?>
                                    <?php echo $site->appointment_button_text()->text() ?></a>
                                    <?php endif ?></a>
                                <?php endif ?>
                        </div>
                    </div>
                    <?php $no++; endforeach ?>
                </div>
            </div>
            <!-- END DESKTOP -->
        </div>
    </section>
    <!-- END OF SERVICES  -->