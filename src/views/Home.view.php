<?php include __DIR__ . '/partials/Header.part.php'; ?>

<h1>This is the HomeView</h1>
<h2>Welcome <?= $userName ?></h2>
<h3>Here Are your latest posts:</h3>
<ul>
  <?php
    foreach ($latestPosts as $post) {
      echo '<li>';
      echo $post;
      echo '</li>';
    }
  ?>
</ul>

<?php include __DIR__ . '/partials/Footer.part.php'; ?>