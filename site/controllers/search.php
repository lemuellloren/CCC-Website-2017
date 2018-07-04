<?php

return function($site, $pages, $page) {

	$Numberoftags = page('blog')->number_of_popular_tags()->int();
	//$whatToSearch = $page->whattosearch()->text();
	//$NumberofArticletobePaginated = $page->number_article_paginated()->int();
		// if ($Numberoftags <= 0 || $NumberofArticletobePaginated <= 0) {
		// 	$Numberoftags = 5;
		// 	$NumberofArticletobePaginated = 3;
		// }
	$tagcloud = tagcloud(page('blog'), array('limit' => $Numberoftags));
	
	if(get('search-field')) {
		$query   = get('search-field');
		$results = page('blog')->children()->visible()->filterBy('date', '<=', time())->search($query, 'title|text|author|tags|teaser');
	} elseif(get('tags')) {
		$query   = get('tags');
		$results = page('blog')->children()->visible()->filterBy('date', '<=', time())->search($query, 'tags');
	} else {
		go('/error');
	}
	
	//$results = $site->search($query, 'title|text');
	$perpage  = page('blog')->perpage()->int();
	$results = $results->paginate($perpage);
	$searchCount = count(page('blog')->search($query, 'title|text|author|tags'));

	return array(
		'query'   => $query,
		'results' => $results,
		'pagination' => $results->pagination(),
		'tagcloud' => $tagcloud,
		'searchCount' => $searchCount
	);

};