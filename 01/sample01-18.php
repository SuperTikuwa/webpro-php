<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <?php
  $data = 12;
  if ($data > 10) {
  ?>
    <p>$dataの値は10より大きい</p>
  <?php
  } else {  ?>
    <p>$dataの値は10以下</p>
  <?php
  }
  ?>


  <?php
  if ($data > 10) :
  ?>
    <p>$dataの値は10より大きい</p>
  <?php
  else :  ?>
    <p>$dataの値は10以下</p>
  <?php
  endif;
  ?>
</body>

</html>