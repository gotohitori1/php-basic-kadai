<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>
<body>

  <p>
    <?php
        function sort_2way(&$array, $order)
        {
          if ($order == "asc") {
          // 昇順
          sort($array);
          } else {
          // 降順
          rsort($array);
          }
        }

      $data = [15, 4, 18, 23, 10];

      // 昇順
      echo "昇順にソートします<br>";
      $asc = $data;
      sort_2way($asc, "asc");
      foreach ($asc as $value) {
        echo $value . "<br>";
      }

      echo "<br>";
      // 降順
      echo "降順にソートします<br>";
      $desc = $data;
      sort_2way($desc, "desc");
      foreach ($desc as $value) {
        echo $value . "<br>";
      }
    ?>
  </p>
</body>
