<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <?php
  print "test1";
  rmdir("test");

  print "test2";
  error_reporting(0);
  rmdir("test");

  print "test3";
  error_reporting(E_ALL);
  rmdir("test");

  print "test4";
  @rmdir("test");
  ?>
</body>

</html>