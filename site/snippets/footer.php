<footer class="bottom-footer">
    <div class="footer-container">
        <div class="agreement">
            <a href="#policy" data-uk-modal><?php echo $site->privacy_policy_title()->text() ?></a>
            <span> | </span> 
            <a href="#terms" data-uk-modal><?php echo $site->terms_and_condition_title()->text() ?></a>
        </div>
        <?php if($appointment_button_text = $site->appointment_button_text()->text()->isNotEmpty()): ?>
            <a href="#booking" data-uk-modal class="book-button-footer hvr-icon-wobble-horizontal"><?php echo $site->appointment_button_text()->text() ?>
                <?php if($appointment_button_icon = $site->appointment_button_icon()->text()->isNotEmpty()): ?>    
                    <span class="uk-icon-<?php echo $site->appointment_button_icon()->text() ?>"></span>
                <?php else : ?>
                    <span class="uk-icon-calendar-plus-o"></span>
                <?php endif ?>
            </a>
        <?php else : ?>
        <?php endif ?>
        <div class="footer-icons">
            <ul class="contacts-list">
                <?php if($site->phone()->isNotEmpty() || $site->email()->isNotEmpty()) : ?>
                <li class="contact-group">
                    <p><?php echo $site->callnow_button_text() ?></p>
                </li>
                <?php endif ?>
                <li class="contact-group">
                    <a href="mailto:<?php echo str::encode($site->email()) ?>" class="contact-icon hvr-icon-wobble-horizontal">
                        <span class="uk-icon-envelope" title="Email us"></span>
                    </a>
                </li>
                <li class="contact-group">
                    <a href="tel:<?php echo $site->phone()->text() ?>" class="contact-icon hvr-icon-wobble-horizontal">
                        <span class="uk-icon-phone" title="<?php echo $site->phone_icon_tooltip()->text() ?>"></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer-icons">
            <ul class="share-list">
                <?php if($site->share_facebook() == "1" || $site->share_twitter() == "1" || $site->share_linkedin() == "1" || $site->share_pinterest() == "1" || $site->share_tumblr() == "1" || $site->share_reddit() == "1" || $site->share_googleplus() == "1" || $site->share_email() == "1"): ?>
                <li class="contact-group">
                    <p><?php echo $site->social_share_text()?></p>
                </li>
                <?php endif ?>
                <?php if($site->share_facebook()->bool()):?>
                    <li class="contact-group">
                        <a title="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo url() ?>" class="contact-icon hvr-icon-wobble-horizontal"
                            target="_blank">
                            <span class="uk-icon-facebook"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if($site->share_twitter()->bool()):?>
                    <li class="contact-group">
                        <a title="twitter" href="https://twitter.com/share?url=<?php echo url() ?>&text=<?php echo $site->title()->text()?>%2F&hashtags=<?php echo $site->keyword()->text()?>"
                            class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                            <span class="uk-icon-twitter"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if($site->share_linkedin()->bool()):?>
                    <li class="contact-group">
                        <a title="linkedin" href="http://www.linkedin.com/shareArticle?url=<?php echo url() ?>%2F&title=<?php echo $site->title()->text()?>%2F"
                            class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                            <span class="uk-icon-linkedin"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if($site->share_pinterest()->bool()):?>
                    <?php if($website_logo = $site->website_logo()->toFile()): ?>
                        <li class="contact-group">
                            <a title="pinterest" href="https://pinterest.com/pin/create/button/?url=<?php echo url() ?>&media=<?= $website_logo->url() ?>&description=<?php echo $site->description()->text()?>"
                                class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                                <span class="uk-icon-pinterest-p"></span>
                            </a>
                        </li>
                    <?php endif ?>
                <?php endif ?>
                <?php if($site->share_tumblr()->bool()):?>
                    <li class="contact-group">
                        <a title="tumblr" href="http://www.tumblr.com/share/link?url=<?php echo url() ?>%2F&name=<?php echo $site->title()->text()?>%2F"
                            class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                            <span class="uk-icon-tumblr"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if($site->share_reddit()->bool()):?>
                    <li class="contact-group">
                        <a title="reddit" href="http://reddit.com/submit?url=<?php echo url() ?>%2F&title=<?php echo $site->title()->text()?>"
                            class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                            <span class="uk-icon-reddit-alien"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if($site->share_googleplus()->bool()):?>
                    <li class="contact-group">
                        <a title="google plus" href="https://plus.google.com/share?url=<?php echo url() ?>"
                            class="contact-icon hvr-icon-wobble-horizontal" target="_blank">
                            <span class="uk-icon-google-plus"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if($site->share_email()->bool()):?>
                    <li class="contact-group">
                        <a href="mailto:?subject=Checkout <?php echo $site->title()->text()?> &amp;body=Check out this site <?php echo url() ?>." title="Share by Email" class="hvr-icon-wobble-horizontal contact-icon" target="_blank">
                            <span class="uk-icon-envelope" title="email"></span>
                        </a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
        <div class="copyRight">
            <?php echo $site->copyright()->kt() ?>
        </div>
    </div>
</footer>
<!-- END OF FOOTER -->


<!-- DROP DOWN MENU -->
<div id="menu" class="uk-width-1-1 uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <div class="menu-head">
            <?php if($website_logotwo = $site->image($site->website_logotwo())): ?>
                <a href="#" class="logo">
                    <img src="<?= $website_logotwo->resize(118, 74, 100)->url() ?>" alt="<?= $website_logotwo->alt_text() ?>" class="logo">
                </a>
            <?php endif ?>
            <a href="#menu" class="home-section-btn" data-uk-smooth-scroll="{offset: -30}">
                <span class="uk-icon-angle-right"></span>
            </a>
        </div>
        <ul class="menu-links">
            <?php if(page('home/promo')->ispromo()->text() == '1') : ?>
                <li class="desktop-menu"><a class="text-menu" data-uk-smooth-scroll="{offset: -30}" href="#<?php echo page('home/promo')->uid()?>-section"><?php echo page('home/promo')->title()->title()->upper()?></a></li>            
            <?php else : ?>
            <?php endif ?>
                <li><a href="#what-we-treat-section" ><?php echo page('home/what-we-treat')->title()->upper() ?></a></li>
                <li><a href="#services-section" ><?php echo page('home/services')->title()->upper() ?></a></li>
                <li><a href="#who-we-are-section" ><?php echo page('home/who-we-are')->title()->upper() ?></a></li>
                <li><a href="#contact-us-section" >CONTACT US</a></li>
        </ul>
<?php if($callnow_button_text = $site->callnow_button_text()->text()->isNotEmpty()): ?>
    <a href="tel:<?php echo $site->phone()->text() ?>" class="call-button-zombie hvr-icon-wobble-horizontal">
        <?php if($callnow_button_icon = $site->callnow_button_icon()->text()->isNotEmpty()): ?>
            <span class="uk-icon-<?php echo $site->callnow_button_icon()->text() ?>"></span><?php echo $site->callnow_button_text()->text() ?></a>
        <?php else : ?>
            <span class="uk-icon-phone"></span><?php echo $site->callnow_button_text()->text() ?></a>
        <?php endif ?>
        <?php if($appointment_button_text = $site->appointment_button_text()->text()->isNotEmpty()): ?> 
            <a href="#booking" data-uk-modal class="book-button-cloudburst hvr-icon-wobble-horizontal">
                <?php if($appointment_button_icon = $site->appointment_button_icon()->text()->isNotEmpty()): ?>
                    <span class="uk-icon-<?php echo $site->appointment_button_icon()->text() ?>"></span><?php echo $site->appointment_button_text()->text() ?></a>
                <?php else : ?>
                    <span class="uk-icon-calendar-plus-o"></span><?php echo $site->appointment_button_text()->text() ?></a>
                <?php endif ?>
            <?php else : ?>
            <?php endif ?>
            <div class="social-media">
                <ul>
                    <?php if($site->visit_facebook()->isNotEmpty()): ?>    
                        <li>
                            <a href="<?php echo $site->visit_facebook() ?>" target="_blank">
                                <span class="uk-icon-facebook" title="facebook"></span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if($site->visit_twitter()->isNotEmpty()): ?>
                        <li>
                            <a href="<?php echo $site->visit_twitter() ?>" target="_blank">
                                <span class="uk-icon-twitter" title="twitter"></span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if($site->visit_linkedin()->isNotEmpty()): ?>    
                        <li>
                            <a href="<?php echo $site->visit_linkedin() ?>" target="_blank">
                                <span class="uk-icon-linkedin" title="linkedin"></span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if($site->visit_pinterest()->isNotEmpty()): ?>    
                        <li>
                            <a href="<?php echo $site->visit_pinterest() ?>" target="_blank">
                                <span class="uk-icon-pinterest-p" title="pinterest"></span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if($site->visit_instagram()->isNotEmpty()): ?>    
                        <li>
                            <a href="<?php echo $site->visit_instagram() ?>" target="_blank">
                                <span class="uk-icon-instagram" title="instagram"></span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if($site->visit_youtube()->isNotEmpty()): ?>    
                        <li>
                            <a href="<?php echo $site->visit_youtube() ?>" target="_blank">
                                <span class="uk-icon-youtube-play" title="youtube"></span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if($site->visit_tumblr()->isNotEmpty()): ?>    
                        <li>
                            <a href="<?php echo $site->visit_tumblr() ?>" target="_blank">
                                <span class="uk-icon-tumblr" title="tumblr"></span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if($site->visit_googleplus()->isNotEmpty()): ?>    
                        <li>
                            <a href="<?php echo $site->visit_googleplus() ?>" target="_blank">
                                <span class="uk-icon-google-plus" title="google plus"></span>
                            </a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
    <style type="text/css">
</style>
<div id="booking" class="uk-modal">
    <div class="uk-modal-dialog booking-modal">
        <a class="uk-modal-close uk-close booking-close" autofocus></a>
        <div class="policy-container">
            <h2><?php echo $site->appointment_button_text()->text() ?></h2>
            <!-- display message in case users want to use contact form -->
            <div class="form-container">
                <?php echo str_replace('--CONTACTUS--','<a href="#contact-us-section" id="closebooking">contact us</a>', $site->contact_message_modal()->kt()) ?>
            </div>
              <!-- CLiniko Widget -->
            <?php echo $site->cliniko_tag()->html();?>
        </div>
    </div>
</div>
    <!-- MAP MODAL -->
    <div id="map" class="uk-modal">
        <div class="uk-modal-dialog">
            <a class="uk-modal-close uk-close" id="test" autofocus></a>
            <div class="map-container">
                <?php echo $site->location()->html(); ?>
                <div class="uk-overlay-panel" id="toggle-cover-modal" data-uk-toggle="{target:'#toggle-cover-modal'}"></div>
            </div>
            <div class="uk-hidden-large map-content">
                <h1><?php echo $site->header_title()->text() ?></h1>
                <p><?php echo $site->header_subtitle()->text() ?></p>
                <?php echo $site->address()->kt() ?>

                </div>
                <!-- DESKTOP -->
                <div class="uk-visible-large desktop-modal">
                    <div class="uk-grid">
                        <div class="uk-width-1-2">
                            <div class="desktop-info">
                                <h1><?php echo $site->header_title()->text() ?></h1>
                                <p><?php echo $site->header_subtitle()->text() ?></p>

                                <ul>
                                    <li><a href="mailto:<?php echo str::encode($site->email()) ?>" class="hvr-icon-wobble-horizontal"><span class="uk-icon-hover uk-icon-envelope"></span><?php echo str::encode($site->email()) ?></a></li>
                                </ul>
                                <div class="contactUs-social">
                                    <ul class="contactshare-list">
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
                            </div>
                            <?php endif ?>
                        </div>
                        <div class="uk-width-1-2">
                            <div class="contact-address kirbyText">
                                <ul>
                                    <li><span class="uk-icon-map-marker"></span><?php echo $site->address()->kt() ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END DESKTOP -->
                        <div class="map-btn">
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
            <!-- END OF MAP MODAL -->
        </div>

        <!--FOOTER MODALS -->
        <!--Site Privacy Policy MODALS -->
        <div id="policy" class="uk-modal">
            <div class="uk-modal-dialog policy-modal">
                <a class="uk-modal-close uk-close policy-close" autofocus></a>
                <div class="policy-container">
                    <h2><?php echo $site->privacy_policy_title()->text()?></h2>
                    <?php echo $site->privacy_policy()->kt()?>
                </div>
            </div>
        </div>
        <!-- END Site Privacy Policy MODALS -->
        <!--Terms & Condition MODALS -->
        <div id="terms" class="uk-modal">
            <div class="uk-modal-dialog policy-modal">
                <a class="uk-modal-close uk-close policy-close" autofocus></a>
                <div class="policy-container">
                    <h2><?php echo $site->terms_and_condition_title()->text()?></h2>
                    <?php echo $site->terms_and_condition()->kt()?>
                </div>
            </div>
        </div>
        <!-- END Terms & Condition MODALS -->
        <!-- END FOOTER MODALS -->
        <?php if($page->template() == 'blog') : ?>
            <script src="<?php echo url(); ?>/assets/js/min/home.min.js"></script>  
        <?php elseif($page->isHomePage()) : ?>
            <script src="<?php echo url(); ?>/assets/js/min/home.min.js"></script>    
        <?php elseif($page->template() == 'article' || $page->template() == 'help') : ?>
            <script src="<?php echo url(); ?>/assets/js/min/article.min.js"></script>    
        <?php elseif($page->template() == 'search') : ?>
            <script src="<?php echo url(); ?>/assets/js/min/search.min.js"></script>
        <?php else : ?>
            <script src="<?php echo url(); ?>/assets/js/min/error.min.js"></script>    
        <?php endif ?>

        <?php echo $site->analytics_tag()->html() ?>

<!-- inline js start -->        
<script type="text/javascript">
    // for pagination on course listing.
    $('#blog-section').on('click', '#prevPage, #nextPage', function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        $.ajax({
            url: href,
            dataType: 'html',
            success: function(data){
              $('#blog-section').html(data).css({"margin-top": "0px", "padding-top": "0px", "padding-bottom": "0px"});
              console.log(data);
          },
          error: function(result,statTxt){
              var msg = 'Error '+ result.status + ' - unable to fetch posts: ' + result.statusText + " (" + statTxt + ")";
              
          }
      })
    });
    // AJAX CONTACT FORM PROCESSING
    $('#message-us-form').on('submit', function(e){
        e.preventDefault();
        var successMessage = $('#successMessage').val();
        var form = $(this);
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        form.find('.form-result').removeClass('uk-hidden');
        if (!filter.test($('#email').val())) {
          var msg = "Email field must contain a valid email. <br>";  
          form.find('.form-result').html(msg);
        }
        else {
        $.ajax({
            type: 'POST',
            // use the same url here as the 'pattern' in your route
            url: '<?php echo url(); ?>/api/mailFormData',
            data: form.serialize(),
            success: function(result){
                // form data successfully reached form processor api
                if(result.success){
                    // message successfully sent
                    form.find('.form-result').html(successMessage);
                    $('#fullname').val('');
                    $('#email').val('');
                    $('#contact').val('');
                    $('#message').val('');
                } else {
                    // an issue was encountered

                    if(result.errors == undefined || result.errors == null || result.errors.length == 0){
                        // no validation errors - an email sending error was encountered
                        form.find('.form-result').text(result.msg);
                    } else {
                        // a validation error was encountered
                        var msg = "Please note: <br>";
                        if(result.errors.indexOf('name') != -1){ 
                            msg += "Name field must not be empty. <br>";
                        }
                        if(result.errors.indexOf('email') != /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/){ 
                            msg += "Email field must contain a valid email. <br>";
                        }
                        if(result.errors.indexOf('message') != -1){ 
                            msg += "Message field must not be empty. <br>";
                        }
                        form.find('.form-result').html(msg);
                    }
                }
            },
            error: function(result){
                // the form was unable to reach processor api
                form.find('.form-result').text('Error '+ result.status + ' - unable to process form: ' + result.statusText);
            },
            dataType: 'json'
        });
        } 
    });

    // AJAX CONTACT FORM PROCESSING IN BOOKING MODAL
    $('#message-us-form-booking').on('submit', function(e){
        e.preventDefault();
        var successMessage = $('#successMessage').val();
        var form = $(this);
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        form.find('.form-results').removeClass('uk-hidden');
        if (!filter.test($('#emails').val())) {
          var msg = "Email field must contain a valid email. <br>";  
          form.find('.form-results').html(msg);
        }
        else {
        $.ajax({
            type: 'POST',
            // use the same url here as the 'pattern' in your route
            url: '<?php echo url(); ?>/api/mailFormData',
            data: form.serialize(),
            success: function(result){
                // form data successfully reached form processor api
                if(result.success){
                    // message successfully sent
                    form.find('.form-results').html(successMessage);
                    $('#fullnames').val('');
                    $('#emails').val('');
                    $('#contacts').val('');
                    $('#messages').val('');
                } else {
                    // an issue was encountered

                    if(result.errors == undefined || result.errors == null || result.errors.length == 0){
                        // no validation errors - an email sending error was encountered
                        form.find('.form-result').text(result.msg);
                    } else {
                        // a validation error was encountered
                        var msg = "Please note: <br>";
                        if(result.errors.indexOf('name') != -1){ 
                            msg += "Name field must not be empty. <br>";
                        }
                        if(result.errors.indexOf('email') != -1){ 
                            msg += "Email field must contain a valid email. <br>";
                        }
                        if(result.errors.indexOf('message') != -1){ 
                            msg += "Message field must not be empty. <br>";
                        }
                        form.find('.form-results').html(msg);
                    }
                }
            },
            error: function(result){
                // the form was unable to reach processor api
                form.find('.form-results').text('Error '+ result.status + ' - unable to process form: ' + result.statusText);
            },
            dataType: 'json'
        });
        } 
    });

    document.getElementById("searchField")
    .addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode == 13) {
            document.getElementById("ccc").click();
        }
    });

    $('.search-form #articleSearch').click(function(){
        $("#search-formArticle").submit();
    });

    $('.search-form #articleSearchM').click(function(){
        $("#search-formArticleM").submit();
    });

    $('.search-form #blogSearch').click(function(){
        $("#search-formBlog").submit();
    });

    $('.search-form #blogSearchM').click(function(){
        $("#search-formBlogM").submit();
    });

    $('.search-form #blogMenu').click(function(){
        $("#search-formMenu").submit();
    });

    $('.search-form #articleMenu').click(function(){
        $("#search-formMenu").submit();
    });

    $('.search-form #formMain').click(function(){
        $("#search-formMain").submit();
    });
    
    $('#closebooking').click(function() {
        var modal = UIkit.modal("#booking");
        modal.hide();
    }); 

</script>
</body>
</html>