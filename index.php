<?php
$image_url = 'https://mmlvgx.xp3.biz/granny-smith/static/images/'.rand(1, count(glob('./static/images/*'))).'.jpg';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Гренни Смит</title>
    <meta charset="UTF-8" />
    <style>
      body {
        background-color: rgb(0, 0, 0);
      }
    </style>
  </head>
  <body>
    <img src="<?= $image_url ?>" />
  </body>
</html>
