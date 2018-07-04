<?php if($image = $page->image($page->mainImage())): ?>
	<section id="hero-banner" class="hero-banner uk-container" style="z-index: 10; background: url('<?= thumb($image,array('width'=>1200, 'height'=>630, 'crop'=>true))->url() ?>') no-repeat center center ;background-size: cover; background-attachment: initial;">
	    <div class="hero-container">
	        <div class="logo"></div>
	</section>
<?php else : ?>
	<section id="hero-banner" class="hero-banner uk-container" style="z-index: 10; background: rgb(61, 77, 97)">
	    <div class="hero-container">
	        <div class="logo"></div>
	</section>
<?php endif ?>