<?php
session_start();

$rows = $_POST['rows'];
$columns = $_POST['columns'];

$_SESSION['rows'] = $rows;
$_SESSION['columns'] = $columns;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>soal1b</title>
</head>

<body>

  <form action="result.php" method="post">
    <?php
    for ($i = 1; $i <= $rows; $i++) {
      for ($j = 1; $j <= $columns; $j++) {

        $name = "field_{$i}{$j}";
        $label = "{$i}.{$j}";

        echo "<div class='form-group'>
       <label for='$name'>{$label}</label>
       <input type='text' id='$name' name='$name'>
       </div>";
      }
    }
    ?>
    <button type="submit">submit</button>
  </form>
</body>

</html>