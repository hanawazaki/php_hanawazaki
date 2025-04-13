<?php
$host = "localhost";
$username = "root";
$password = "rfcGuhb1029!";
$db = "testdb";

$conn = mysqli_connect($host, $username, $password, $db);

if (!$conn) {
  die("konekso gagal" . mysqli_connct_error());
}

if (isset($_GET['hobi'])) {
  $hobi = $_GET['hobi'];
  $query = "SELECT hobi.hobi as hobi,COUNT(hobi.hobi) AS jumlah_person 
            FROM hobi 
            JOIN person ON hobi.person_id = person.id
            WHERE hobi like '%" . $hobi . "%'
            GROUP BY hobi.hobi ;";
} else {
  $query = "SELECT hobi.hobi as hobi,COUNT(hobi.hobi) AS jumlah_person
FROM hobi 
JOIN person ON hobi.person_id = person.id

GROUP BY hobi.hobi
;";
}

$result = mysqli_query($conn, $query);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>soal 2</title>

  <style>
    .form-group {
      margin-bottom: 10px;
    }

    label {
      margin-bottom: 5px;
    }

    input {
      width: 200px;
      height: 25px;
    }

    button {
      padding: 8px 10px;
      cursor: pointer;
    }

    table {
      border-collapse: collapse;
      width: 25%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>

<body>
  <div>
    <form action="soal2.php" method="GET">
      <input type="text" placeholder="search by hobi" name="hobi">
      <button type="submit">Search</button>
      <button type="button" onclick="window.location.href='soal2.php'">Reset</button>
    </form>
  </div>
  <table>
    <tr>
      <th>Hobi</th>
      <th>Jumlah person</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)): ?>
      <tr>
        <td><?php echo $row['hobi']; ?></td>
        <td><?php echo $row['jumlah_person']; ?></td>
      </tr>
    <?php endwhile ?>
  </table>
</body>

</html>