<?php

// This is a controller file that contains the logic for the blog template.
// It consists of a single function that returns an associative array with
// template variables.
//
// Learn more about controllers at:
// https://getkirby.com/docs/developer-guide/advanced/controllers

return function($site, $pages, $page) {

    $Numberoftags = page('blog')->number_of_popular_tags()->int();

	$tagcloud = tagcloud(page('blog'), array('limit' => $Numberoftags));

    return [
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



