<?php
  include( __DIR__ . '/../partials/content.php');

  $slug = htmlspecialchars(pg_escape_string($_GET['slug']));
  $data = $cases[$slug];

  if(empty($data)) {
      $redirect = "Location: http://" . $_SERVER["HTTP_HOST"] . "/";
      header( $redirect );
  }

  global $meta;
  $meta = $data['meta'];

  include( __DIR__ . '/../partials/header.php');

  // Globalize the case
  $case = $data;

  foreach($case['blocks'] as $caseblock) {
    global $block;
    $block = $caseblock;
    include( __DIR__ . '/../partials/work/blocks/'.$block['type'].'.php');
  }

  include( __DIR__ . '/../partials/work/detail.php');

  include( __DIR__ . '/../partials/footer.php');
