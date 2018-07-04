<?php 

  snippet('header');

    foreach($pages->children()->visible() as $section) {
      snippet($section->uid(), array('data' => $section));
    }

  snippet('footer');

?>