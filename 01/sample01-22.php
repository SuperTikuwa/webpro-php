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

    switch ($i) {
      case 1:
        print "★";
        break;
      case 2:
        print "☆";
        break;
      case 3:
        print "●";
        break;
      case 4:
        print "○";
        break;
      default:
        print "×";
        break;
    }
    print "<br>";
  }
  ?>
</body>

</html>