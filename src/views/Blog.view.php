<?php include __DIR__ . '/partials/Header.part.php'; ?>

<h1>This is the BlogView</h1>
<h2>Welcome <?= $userName ?></h2>
<h2>Here's your personal blog</h2>
<table>
  <tr>
    <td>$VAR_NAME</td>
    <td>$VALUE</td>
  </tr>
  <tr>
    <td>$fname</td>
    <td><?= $fname ?></td>
  </tr>
  <tr>
    <td>$lname</td>
    <td><?= $lname ?></td>
  </tr>
  <tr>
    <td>$occupation</td>
    <td><?= $occupation ?></td>
  </tr>
</table>


<?php include __DIR__ . '/partials/Footer.part.php'; ?>