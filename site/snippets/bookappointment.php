<?php if($appointment_button_text = $site->appointment_button_text()->text()->isNotEmpty()): ?>
            <a data-uk-modal class="book-button-treat-modal hvr-icon-wobble-horizontal" href="#booking"><?php echo $site->appointment_button_text()->text() ?>
            <?php if($appointment_button_icon = $site->appointment_button_icon()->text()->isNotEmpty()): ?>    
                <span class="uk-icon-<?php echo $site->appointment_button_icon()->text() ?>"></span>
            <?php else : ?>
                <span class="uk-icon-calendar-plus-o"></span>
            <?php endif ?>
            </a>
<?php else : ?>
<?php endif ?>