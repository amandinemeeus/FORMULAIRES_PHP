<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>
    <?php foreach ( $data['membres'] as $membre ) : ?>
      <?= $membre['mail'] ?><br>
    <?php endforeach; ?>
  </body>
</html>
