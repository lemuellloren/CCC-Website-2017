<!-- CONTACT US FORM -->
    <section id="contact-us-section" class="contact-us-form" style="z-index: 5;">
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
                            <input class="input__field input__field--minoru" type="text" id="contact" name="contact" placeholder="<?php echo $site->phone_placeholder()->text()?>">
                            <label class="input__label input__label--minoru" for="contact">
                            </label>
                        </span>
                    </div>
                    <div class="uk-width-large-1-2 uk-width-medium-1-1 half-right">
                        <span class="input input--minoru">
                         <textarea class="input__field input__field--minoru" name="message" placeholder="<?php echo $site->message_placeholder()->text()?>" id="message" cols="30" rows="5" required></textarea>
                         <label class="input__label input__label--minoru" for="text">
                         </label>
                     </span>
                 </div>
                 <span class="form-result uk-hidden-large uk-hidden"><img src="<?php echo url('assets/images/loading.gif'); ?>"> <?php echo $site->loading_sending_message()->text() ?></span>
             </div>
             <span class="form-result uk-visible-large uk-hidden"><img src="<?php echo url('assets/images/loading.gif'); ?>"> <?php echo $site->loading_sending_message()->text() ?></span>
                <!--grid-->
                <?php if($contact_button_text = $site->contact_button_text()->text()->isNotEmpty()): ?>
                <button class="message-us-btn hvr-icon-wobble-horizontal" type="submit" form="message-us-form" id="submit" value="Submit" name="submit"><?php echo $site->contact_button_text()->text() ?>
                    <?php if($contact_button_icon = $site->contact_button_icon()->text()->isNotEmpty()): ?>
                        <span class="uk-icon-<?php echo $site->contact_button_icon()->text() ?>"></span></button>
                    <?php else : ?>
                        <span class="uk-icon-envelope"></span></button>
                    <?php endif ?>
                <?php else : ?>
                    <button class="message-us-btn hvr-icon-wobble-horizontal" type="submit" form="message-us-form" value="Submit" name="submit">Send Message<span class="uk-icon-envelope"></span></button>
                <?php endif ?>
                <div class="call-now">
                    <?php if($callnow_button_text = $site->callnow_button_text()->text()->isNotEmpty()): ?>
                        <a href="tel:<?php echo $site->phone()->text() ?>" class="call-button-blog hvr-icon-wobble-horizontal"><?php echo $site->callnow_button_text()->text() ?>
                            <?php if($callnow_button_icon = $site->callnow_button_icon()->text()->isNotEmpty()): ?>
                                <span class="uk-icon-<?php echo $site->callnow_button_icon()->text() ?>"></span>
                            <?php else : ?>
                                <span class="uk-icon-phone"></span>
                            <?php endif ?>
                        </a>
                    <?php else : ?>
                    <?php endif ?>
                </div>
                    <input type="hidden" id="subject" name="subject" value="<?php echo $site->contact_email_subject()->text() ?>">
                    <input type="hidden" id="successMessage" name="successMessage" value="<?php echo $site->contact_success_message()->kt() ?>">
                    <input type="hidden" id="recipient" name="recipient" value="<?php echo str::encode($site->contact_email_recipient()) ?>">
            </form>
        </div>
        <div class="goTo-top-container">
            <a href="#hero-banner" data-uk-smooth-scroll="{offset: 90}">
                <div class="goTo-top"><span class="uk-icon-angle-up"></span></div>
            </a>
        </div>
    </section>
<!-- END OF CONTACT US FORM -->
