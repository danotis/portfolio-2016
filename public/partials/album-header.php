<?php
// Load Webpack manifest to load the HMR or compiled js
$manifest = json_decode(file_get_contents( __DIR__ . '/../dist/manifest.json'));
?>

<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

		<?php include (__dir__ . '/../partials/album-meta.php'); ?>

    <link rel="stylesheet" href="<?= $manifest->app->css ?>">

    <!-- Brandon Grotesque Typekit -->
    <script src="https://use.typekit.net/tuv0pkz.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!-- Work Googlefont -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- icons & favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

  </head>
  <body class='albums'>
