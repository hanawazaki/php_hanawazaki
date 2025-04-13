<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>soal1</title>

  <style>
    .form-group {
      margin-bottom: 10px;
    }

    label {
      margin-bottom: 5px;
    }

    input {
      width: 200px;
    }

    button {
      padding: 10px 15px;
      cursor: pointer;
    }
  </style>
</head>


<body>

  <div class="container">
    <form action="soal1b.php" method="post">
      <div class="form-group">
        <label for="rows">Inputkan Jumlah Baris :</label>
        <input type="number" id="rows" name="rows">
        <label>COntoh : 1</label>
      </div>
      <div class="form-group">
        <label for="columns">Inputkan Jumlah Kolom :</label>
        <input type="number" id="columns" name="columns">
        <label>COntoh : 3</label>
      </div>
      <button type="submit">submit</button>
    </form>
  </div>
</body>

</html>