<?php
	include( __DIR__ . '/partials/content.php');

	global $meta;
	$meta = $home['meta'];

	include( __DIR__ . '/partials/album-header.php');
?>

<div class="anchor-nav wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
	<?php
	foreach($sixteen['blocks'] as $i=>$sixteenblock) {
		global $block;
		$block = $sixteenblock;
		if(empty($block['number'])) continue;
		?>

	<div class="anchor-point">
		<a href="#<?=$block['number']?>"><span class="anchor-number"><?=$block['number']?></span></a>
	</div>

	<?php } ?>

	<div class="attribute wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
		<p><a href="http://www.twitter.com/danotis" target="_blank">A Project by Dan Otis</a></p>
	</div>
</div>

<div class="sixteen">
	<?php

	foreach($sixteen['blocks'] as $sixteenblock) {
		global $block;
		$block = $sixteenblock;
		include( __DIR__ . '/partials/albums/blocks/'.$block['type'].'.php');
	}

	?>

	<?php include (__dir__ . '/partials/album-footer.php'); ?>
</div>
