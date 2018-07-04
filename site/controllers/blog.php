<?php

// This is a controller file that contains the logic for the blog template.
// It consists of a single function that returns an associative array with
// template variables.
//
// Learn more about controllers at:
// https://getkirby.com/docs/developer-guide/advanced/controllers

return function($site, $pages, $page) {

  $Numberoftags = $page->number_of_popular_tags()->int();
	$perpage  = $page->perpage()->int();

  $articles = $page->children()
             ->visible()->filterBy('date', '<=', time())->sortBy('date', 'desc')
             ->paginate($perpage);
   
	$tagcloud = tagcloud(page('blog'), array('limit' => $Numberoftags));

  $isarticles = $page->children()->visible()->filterBy('date', '<=', time());
  $isfeatured = $isarticles->flip()->first();
  $pagination = $articles->pagination();
  $tagcloud = $tagcloud;

  if(kirby()->request()->ajax()){
      // in ajax request - this snippet will be returned by the server.. the site and page object should be redeclared in here...
      // in ajax, the global objects are unknown
      exit(snippet('blog/blog-area', compact('articles','tag', 'perpage', 'pagination','tagcloud', 'isarticles', 'isfeatured'), true));
      
  } else {
      return compact('articles','tag', 'perpage', 'pagination','tagcloud', 'isarticles', 'isfeatured');
  }
};