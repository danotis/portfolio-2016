<div class="album-listing <?= $block['anchor-pos'] ?>">
  <a class="anchor-hide" name="<?=$block['number']?>" id="<?=$block['number']?>"></a>
  <div class="list-rank wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s"><?= $block['number'] ?></div>
  <div class="bg-number wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s"><?= $block['number-text'] ?></div>
  <div class="album-artwork">
    <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".5s"><?= $block['album-artwork'] ?></div>
    <div class="spotify">
      <a href="<?= $block['album-link'] ?>" target="_blank">
        <div class="button wow fadeInUp" data-wow-duration="2s" data-wow-delay="0s"><img src="img/albums/spotify-logo.png"><span class="button-copy">Listen on Spotify</span></div>
      </a>
    </div>
  </div>
  <div class="album-information wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0s">
    <h2><?= $block['album-title'] ?></h2>
    <h3><?= $block['album-artist'] ?></h3>
  </div>
  <div class="album-blurb wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0s">
    <p><?= $block['copy'] ?></p>
    <p><?= $block['favorite'] ?></p>
  </div>
</div>
