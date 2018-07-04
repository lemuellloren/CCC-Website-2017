<?php

kirbytext::$tags['float'] = array(
	'html' => function($tag) {
		return '"'. $tag->attr . '"';
	}
);