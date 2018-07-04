<?php

// This is a controller file that contains the logic for the blog template.
// It consists of a single function that returns an associative array with
// template variables.
//
// Learn more about controllers at:
// https://getkirby.com/docs/developer-guide/advanced/controllers

return function($site, $pages, $page) {

    $Numberofblog = page('home/blogroll')->perpage()->int();

	//$perpage  = $page->perpage()->int();
	$articles = page('blog')->children()->visible()->filterBy('date', '<=', time())->flip()->limit($Numberofblog);
	               //->paginate(4);
	//$tags = $page->children()->visible()->pluck('tags', ',', true);
	$tagcloud = tagcloud(page('blog'), array('limit' => 15));

  return [
    'articles'   => $articles,
    'pagination' => $articles->pagination(),
    'tagcloud' => $tagcloud
  ];

		if(kirby()->request()->ajax()){
                // in ajax request - this snippet will be returned by the server.. the site and page object should be redeclared in here...
                // in ajax, the global objects are unknown
                exit(snippet('blog', compact('pagination','tagcloud'), true));
                
            } else {
                return compact('pagination','tagcloud');
            }
};



