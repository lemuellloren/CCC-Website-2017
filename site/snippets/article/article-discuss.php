<?php if($page->is_comments() == '1') : ?>
<!-- COMMENT SECTION  -->
<section id="commentArea-section" class="comment-section" style="z-index: 7;">
	<div class="comment-container">
	    <center>

	        <div class="disqus-container">
	        	<div id="disqus_thread"></div>
	    	</div>
	    
	    </center>
	</div>
</section>
<!-- END OF COMMENT SECTION  -->
<?php echo $site->discuss_tag()->html() ?>
<?php endif ?>