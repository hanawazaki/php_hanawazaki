<?php
session_start();

$rows = $_SESSION['rows'];
$columns = $_SESSION['columns'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="grid">
    <?php

    for ($i = 1; $i <= $rows; $i++) {
      for ($j = 1; $j <= $columns; $j++) {
        $name = "field_{$i}{$j}";
        $label = "{$i}.{$j}";
        $val = $_POST[$name];

        echo "
       <p>
       {$label} : {$val}
       </p>";
      }
    }
    ?>

    <a href="soal1a.php">Kembali</a>
  </div>
</body>

</html>