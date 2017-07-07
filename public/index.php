<?php
	include( __DIR__ . '/partials/content.php');

	global $meta;
	$meta = $home['meta'];

	include( __DIR__ . '/partials/header.php');
?>

<div class="index">

	<div class="introduction">
		<div class="rotate">
			<span class="view-work wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.5s">
				View Work <span class="icon-arrow">&nbsp;</span>
			</span>
		</div>
		<div class="bottom-out wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
			<h1><span class="white">Dan Otis</span></h1>
			<p>
				Interactive &amp; Graphic Designer &mdash;<br>
				Alive in Sacramento, California
			</p>
		</div>
	</div>


	<div class="all-work wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
		<p class="mobile list-title">Work</p>
		<?php foreach($cases as $slug=>$case) {
			$listing = $case['listing'];
		?>

		<div class="desktop"><?php include( __DIR__ . '/partials/desktop-work-listing.php'); ?></div>
		<div class="mobile"><?php include( __DIR__ . '/partials/mobile-work-listing.php'); ?></div>

		<?php } ?>

		<?// var_dump($case); ?>
	</div>


<?php include (__dir__ . '/partials/condensed-footer.php'); ?>
