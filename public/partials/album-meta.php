<?php
// Build default array
$meta = (empty($meta)) ? [] : $meta;

$meta['title']       = (empty($meta['title'])) ? $albumglobal['meta']['title'] : $meta['title'];
$meta['description'] = (empty($meta['description'])) ? $albumglobal['meta']['description'] : $meta['description'];
$meta['image']       = (empty($meta['image'])) ? $albumglobal['meta']['image'] : $meta['image'];

// Add Global company title to tile string
$meta['title'] = ($meta['title'] != $albumglobal['meta']['title']) ?
$meta['title'] . ' | ' . $albumglobal['meta']['title'] : $meta['title'];

// Get domain to append to absolute image paths
$domain = 'http://' . $_SERVER['HTTP_HOST'];
?>


<?// Render meta tags ?>
<title><?= $meta['title'] ?></title>
<meta property="og:title" content="<?= $meta['title']; ?>">
<meta name="title" property="title" content="<?= $meta['title']; ?>">

<meta name="description" content="<?= $meta['description']; ?>">
<meta name="og:description" property="og:description" content="<?= $meta['description']; ?>">

<meta name="image" property="image" content="<?= $domain . $meta['image']?>">
<meta property="og:image" content="<?= $domain . $meta['image']?>" />

<!-- Twitter OG -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@danotis">
<meta name="twitter:creator" content="@danotis">
<meta name="twitter:title" content="<?= $meta['title'] ?>">
<meta name="twitter:description" content="<?= $meta['description']; ?>">
<meta name="twitter:image" content="<?= $domain . $meta['image']?>">
