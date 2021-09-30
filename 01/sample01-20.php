<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <?php
  for ($i = 1; $i <= 10; $i++) {
    print $i;
    if ($i == 5) {
      print "●";
    }

    if ($i > 5) {
      print "▼";
    }

    if ($i >= 5) {
      print "▽";
    }
    if ($i < 3) {
      print "■";
    }
    if ($i < 3) {
      print "□";
    }
    if ($i <> 7) {
      print "★";
    }
    print "<br>";
  }
  ?>
</body>

</html>