<?php require_once basePath("/views/partials/header.php") ?>

<h1><?= $title ?></h1>

<?php foreach ($notes as $note): ?>
    <div>
        <?= $note->getBody(); ?>
    </div>
<?php endforeach; ?>

<?php require_once basePath("/views/partials/footer.php") ?>
