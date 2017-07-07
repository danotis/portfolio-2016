<?php
	include( __DIR__ . '/partials/content.php');

	global $meta;
	$meta = $home['meta'];

	include( __DIR__ . '/partials/header.php');
?>

<div class="index">
  <h1>Top 10 Albums</h1>
  <p class="sidebar">A Project by <a href="http://www.twitter.com/danotis">Dan Otis</a></p>
</div>


<?php include (__dir__ . '/partials/condensed-footer.php'); ?>
