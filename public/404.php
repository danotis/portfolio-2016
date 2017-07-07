<?php
	include( __DIR__ . '/partials/content.php');

	global $meta;
	$meta = [
    'title' => 'Page Not Found',
    'description' => 'Whoooops',
    'image' => '',
  ];
	include( __DIR__ . '/partials/header.php');
?>


  <h1>:( I've made a huge mistake.</h1>
  <p>Sorry, but the page you were trying to view does not exist. Perhaps you might find what you're looking for in the list below?</p>

<?php include (__dir__ . '/partials/footer.php'); ?>
