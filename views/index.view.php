<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
</head>
<body>
  <h1><?php echo $greeting ?></h1>

  <ul>
    <?php foreach ($notes as $note) : ?>
      <li><?php echo $note['body']; ?></li>
    <?php endforeach; ?>
  </ul>

</body>
</html>