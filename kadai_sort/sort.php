<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>
<body>

  <p>
    <?php
        function sort_2way($array, $order)
        {
          if ($order) {
          // 昇順
          echo "昇順にソートします<br>";
          sort($array);
          } else {
          // 降順
          echo "降順にソートします<br>";
          rsort($array);
          }
          foreach ($array as $value) {
          echo $value . "<br>";
       }
    }

      $data = [15, 4, 18, 23, 10];
      sort_2way($data,TRUE);
      sort_2way($data,FALSE);
      
    ?>
  </p>
</body>
