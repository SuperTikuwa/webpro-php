<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <?php
  $data = 3;
  for ($i = 1; $i <= 10; $i++) {
    print $i;
    if ($i <= 5 and $i <= $data) {
      print "●";
    }
    if ($i >= 8 or $i <= $data) {
      print "○";
    }

    if ($i >= 8 and $i <= 10) {
      print "▼";
    }

    if (!($i >= 8 and $i <= 10)) {
      print "▽";
    }
    print "<br>";
  }
  ?>
</body>

</html>