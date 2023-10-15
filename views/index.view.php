<?php require_once basePath("/views/partials/header.php") ?>

<h1><?= $title ?></h1>

<ul>
    <?php foreach ($notes as $note) : ?>
        <li><?= $note['body']; ?></li>
    <?php endforeach; ?>
</ul>

<?php require_once basePath("/views/partials/footer.php") ?>
