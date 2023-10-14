<?php require_once basePath("/views/partials/header.php") ?>

  <h1><?php echo $greeting ?></h1>

  <ul>
    <?php foreach ($notes as $note) : ?>
      <li><?php echo $note['body']; ?></li>
    <?php endforeach; ?>
  </ul>

<?php require_once basePath("/views/partials/footer.php") ?>