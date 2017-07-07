<div class="marquee">

  <div class="project-title wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">
    <p class="project-type">
      <?= $block['project-type'] ?>
    </p>
    <h1><?= $block['title'] ?></h1>
  </div>

  <div class="marquee-images">
    <div class="marquee-device wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
      <img src="<?= $block['marquee-device'] ?>" alt="Device Design" />
    </div>
    <div class="marquee-bg wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
      <div class="desktop align" style="background-image: url(<?= $block['background-image'] ?>)"></div>
      <div class="img-wrap mobile">
        <img src="<?= $block['mobile-marquee'] ?>" alt="<?= $block['title'] ?> Product" />
      </div>
      <a class="launch-project wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s" href="<?= $block['launch-project'] ?>" target="_blank">Launch Project <span class="icon-arrow"> </span></a>
    </div>
  </div>

</div>
