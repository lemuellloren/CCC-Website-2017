<!DOCTYPE html>
<html lang="en-AU">
<head>
<!-- STANDARD META -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo seo('title', array(), true); ?></title>
<?php if($page->template() == 'article' || $page->template() == 'search') : ?>
    <meta name="keywords" content="<?php echo page('home')->keywords() ?>">  
    <meta name="description" content="<?php echo $page->teaser()->excerpt(155) ?>">
<?php else : ?>
    <meta name="keywords" content="<?php echo $page->keywords() ?>"> 
    <meta name="description" content="<?php echo seo('description', array(), true); ?>">
<?php endif ?>
<!-- OPENGRAPH META -->
    <meta property="og:url" content="<?php echo $page->url() ?>">
    <meta property="og:title" content="<?php echo seo('title', array(), true); ?>">
<?php if($page->template() == 'article') : ?>
    <meta property="og:description" content="<?php echo $page->teaser()->excerpt(155) ?>">
<?php $tags = $page->tags()->split(', '); ?>
<?php foreach($tags as $tag): ?>
<?php endforeach ?>
<?php else : ?>
    <meta property="og:description" content="<?php echo seo('description', array(), true); ?>">
<?php endif ?>
<?php if($page->template() == 'blog') : ?>
    <?php if($blogimage = $page->children()->visible()->flip()->first()->mainImage()->toFile()) : ?>
<meta property="og:image" content="<?php echo thumb($blogimage,array('width'=>1200, 'height'=>630, 'crop'=>true))->url() ?>">
    <?php endif ?>
<?php else : ?>
    <?php if($img = $page->image($page->mainImage())):?>
<meta property="og:image" content="<?php echo thumb($img,array('width'=>1200, 'height'=>630, 'crop'=>true))->url() ?>">
    <?php endif; ?>
<?php endif ?>
<!-- END OPENGRAPH META -->

<!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo url() ?>/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo url() ?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo url() ?>/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo url() ?>/manifest.json">
    <link rel="mask-icon" href="<?php echo url() ?>/safari-pinned-tab.svg" color="#1d3351">
    <meta name="theme-color" content="#1d3351">

<!-- STYLESHEETS -->
<?php $parentUrl = $page->parent()->title();
    if( $parentUrl == $site->title()): ?>
   <link rel="stylesheet" href="<?php echo url() ?>/assets/css/<?php echo $page->intendedTemplate()?>.min.css">
<?php else: ?>
   <link rel="stylesheet" href="<?php echo url() ?>/assets/css/<?php echo $page->intendedTemplate()?>.min.css">
<?php endif; ?>
</head>

<body id="bodySection">