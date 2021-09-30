<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>

  <?php

  for ($i = 0; $i < 10; $i++) {
    print $i;
    print ",";
  }
  print "<br>";

  for ($i = 10; $i >= 1; $i -= 2) {
    print $i;
    print ",";
  }
  ?>

</body>

</html>