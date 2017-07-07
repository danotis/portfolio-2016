<div class="work-listing">
	<img class="work-devices wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s"
		src="<?= $listing['marquee-device'] ?>" alt="<?= $listing['title']; ?> Designs" />

	<img class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s"
		src="<?= $listing['image']; ?>" alt="<?= $listing['title']; ?> Case Study" />

	<a href="/work/<?= $slug ?>">
		<div class="work-title wow slideInRight" data-wow-duration="1.5s" data-wow-delay="0s">
			<h2><?= $case['title'] ?></h2>
			<p class="project-type"><?= $listing['type'] ?></p>
		</div>
	</a>
</div>
