<!-- WHAT WE THREAT -->
<?php if (page('home/promo')->ispromo()->text() == '1') : ?>
    <section id="<?php echo str::slug($data->uid())?>-section" class="treat-section" style="z-index: 8;">
    <?php else : ?>
        <section id="<?php echo str::slug($data->uid())?>-section" class="treat-section-no-promo" style="z-index: 8;">
        <?php endif ?>        
        <!--Smooth Scroll Menu Link-->
        <div id="treat-scroll"></div>
        <!--Smooth Scroll Menu Link-->
        <div class="treat-container">
            <div class="treat-title">
                <h1><?php echo $data->header_text()->text() ?></h1>
                <?php echo $data->header_message()->kt() ?>
            </div>
            <!-- MUSCLUAR -->
            <!-- This is the container of the toggling elements -->
            <div class="muscular-nav">
                <ul class="mascular-group" data-uk-switcher="{connect:'#muscular-tabs', animation: 'fade'}">
                    <li class="muscular-list">
                        <a class="hvr-icon-wobble-horizontal" style="margin-left: -30px;" href="#">
                            <span class="uk-icon-angle-double-left"></span>&nbsp;&nbsp;&nbsp;Front</a>
                        </li>
                        <li class="muscular-list">
                            <a class="hvr-icon-wobble-horizontal" style="margin-right: -80px;" href="#">Back&nbsp;&nbsp;&nbsp;
                                <span class="uk-icon-angle-double-right"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- This is the container of the content items -->
                <ul id="muscular-tabs" class="uk-switcher">
                    <li>
                        <!-- FRONT -->
                        <figure>
                            <div id="mascularfront_hype_container" style="margin:auto;position:relative;width:227px;height:500px;overflow:hidden;" aria-live="polite">
                                <script type="text/javascript" charset="utf-8" src="assets/mascularfront.hyperesources/mascularfront_hype_generated_script.js?36096"></script>
                            </div>
                        </figure>
                    </li>
                    <li>
                        <!-- BACK -->
                        <figure>

                            <div id="mascularback_hype_container" style="margin:auto;position:relative;width:227px;height:500px;overflow:hidden;" aria-live="polite">
                                <script type="text/javascript" charset="utf-8" src="assets/mascularback.hyperesources/mascularback_hype_generated_script.js?71614"></script>
                            </div>
                        </figure>
                    </li>
                </ul>
                <!-- END MUSCULAR -->
                <div class="treat-booking">
                    <?php if($appointment_button_text = $site->appointment_button_text()->text()->isNotEmpty()): ?>
                        <a href="#booking" data-uk-modal class="book-button-treat hvr-icon-wobble-horizontal"><?php echo $site->appointment_button_text()->text() ?>
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
            <!-- end container-->
        </section>
        <!-- END WHAT WE THREAT -->


        <!-- WHAT WE THREAT MODALS -->
        <!-- HEAD MODAL -->
        <div id="headArea" class="uk-modal headarea">
            <div class="uk-modal-dialog treat-modal">
                <a class="uk-modal-close uk-close treat-close" autofocus></a>
                <div class="treat-modal-desc">
                    <h1>
                        <?php echo $data->head_neck_title()->text(); ?>
                    </h1>
                    <?php echo $data->head_neck_content()->kt(); ?>
                </div>
                <div class="treat-booking-modal">
                    <?php snippet('bookappointment') ?>
                </div>
            </div>
        </div>
        <!-- END HEAD MODAL -->
        <!-- ARMS MODAL -->
        <div id="armsArea" class="uk-modal armsarea">
            <div class="uk-modal-dialog treat-modal">
                <a class="uk-modal-close uk-close treat-close" autofocus></a>
                <div class="treat-modal-desc">
                    <h1>
                        <?php echo $data->wrist_hand_title()->text(); ?>
                    </h1>
                    <?php echo $data->wrist_hand_content()->kt(); ?>
                </div>
                <div class="treat-booking-modal">
                    <?php snippet('bookappointment') ?>
                </div>
            </div>
        </div>
        <!-- END ARMS MODAL -->
        <!-- CHEST MODAL -->
        <div id="chestArea" class="uk-modal cheastarea">
            <div class="uk-modal-dialog treat-modal">
                <a class="uk-modal-close uk-close treat-close" autofocus></a>
                <div class="treat-modal-desc">
                    <h1>
                        <?php echo $data->chest_title()->text(); ?>
                    </h1>
                    <?php echo $data->chest_content()->kt(); ?>
                </div>
                <div class="treat-booking-modal">
                    <?php snippet('bookappointment') ?>
                </div>
            </div>
        </div>
        <!-- END CHEST MODAL -->
        <!-- HIPS MODAL -->
        <div id="hipsArea" class="uk-modal hipsarea">
            <div class="uk-modal-dialog treat-modal">
                <a class="uk-modal-close uk-close treat-close" autofocus></a>
                <div class="treat-modal-desc">
                    <h1>
                        <?php echo $data->hips_title()->text(); ?>
                    </h1>
                    <?php echo $data->hips_content()->kt(); ?>
                </div>
                <div class="treat-booking-modal">
                    <?php snippet('bookappointment') ?>
                </div>
            </div>
        </div>
        <!-- END HIPS MODAL -->
        <!-- LEGS MODAL -->
        <div id="legsArea" class="uk-modal legsarea" >
            <div class="uk-modal-dialog treat-modal">
                <a class="uk-modal-close uk-close treat-close" autofocus></a>
                <div class="treat-modal-desc">
                    <h1>
                        <?php echo $data->legs_title()->text(); ?>
                    </h1>
                    <?php echo $data->legs_content()->kt(); ?>
                </div>
                <div class="treat-booking-modal">
                    <?php snippet('bookappointment') ?>
                </div>
            </div>
        </div>
        <!-- END LEGS MODAL -->
        <!-- LOWERBACK MODAL -->
        <div id="lowerbackArea" class="uk-modal lowerbackarea">
            <div class="uk-modal-dialog treat-modal">
                <a class="uk-modal-close uk-close treat-close" autofocus></a>
                <div class="treat-modal-desc">
                    <h1>
                        <?php echo $data->lowerback_title()->text(); ?>
                    </h1>
                    <?php echo $data->lowerback_content()->kt(); ?>
                </div>
                <div class="treat-booking-modal">
                    <?php snippet('bookappointment') ?>
                </div>
            </div>
        </div>
        <!-- END LOWERBACK MODAL -->
        <!-- BACK MODAL -->
        <div id="backArea" class="uk-modal backarea">
            <div class="uk-modal-dialog treat-modal">
                <a class="uk-modal-close uk-close treat-close" autofocus></a>
                <div class="treat-modal-desc">
                    <h1>
                        <?php echo $data->back_title()->text(); ?>
                    </h1>
                    <?php echo $data->back_content()->kt(); ?>
                </div>
                <div class="treat-booking-modal">
                    <?php snippet('bookappointment') ?>
                </div>
            </div>
        </div>