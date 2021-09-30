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
    if ($i <= 5) {
      print "●";
    } else {
      exit("変数値が5を超えました");
    }
    print "<br>";
  }
  print "loop finished";
  ?>
</body>

</html>