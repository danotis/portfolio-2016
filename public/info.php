<?php
	include( __DIR__ . '/partials/content.php');

	global $meta;
	$meta = $home['meta'];

	include( __DIR__ . '/partials/header.php');
?>


<?php

foreach($info['blocks'] as $infoblock) {
	global $block;
	$block = $infoblock;
	include( __DIR__ . '/partials/work/blocks/'.$block['type'].'.php');
}

?>

<div class="links-list wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
	<p class="info-label">Elsewhere</p>
	<ul>
		<li><a target="_blank" href="http://www.twitter.com/danotis"><span class="icon-arrow"></span>twitter</a></li>
		<li><a target="_blank" href="http://dan.exposure.co"><span class="icon-arrow"></span>exposure</a></li>
		<li><a target="_blank" href="http://www.dribbble.com/danotis"><span class="icon-arrow"></span>dribbble</a></li>
		<li><a target="_blank" href="http://danotis.vsco.co"><span class="icon-arrow"></span>vsco grid</a></li>
		<li><a target="_blank" href="http://www.instagram.com/danotis"><span class="icon-arrow"></span>instagram</a></li>
		<li><a target="_blank" href="http://designers.mx/danotis"><span class="icon-arrow"></span>designers mx</a></li>
		<li><a target="_blank" href="http://attatchedtotheland.tumblr.com"><span class="icon-arrow"></span>inspiration</a></li>
		<li class="gap"><a href="mailto:hey@danotis.co?subject=Inquiry"><span class="icon-arrow"></span>hey@danotis.co</a></li>
		<li><a href="tel:1-408-656-1771"><span class="icon-arrow"></span>408.656.1771</a></li>
		<!-- <li class="gap"><span class="icon-arrow"></span><a target="_blank" href="img/resume_2015.pdf">resum&eacute;</a></li> -->

	</ul>
</div>

<?php include (__dir__ . '/partials/footer.php'); ?>
