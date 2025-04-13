<?php
require_once "conf.php";

$host = "localhost";
$username = "root";
$password = "rfcGuhb1029!";
$db = "testdb";

$conn = mysqli_connect($host, $username, $password, $db);

if (!$conn) {
  die("konekso gagal" . mysqli_connct_error());
}

$query = "SELECT hobi.hobi as hobi,COUNT(hobi.hobi) AS jumlah_person
FROM hobi 
JOIN person ON hobi.person_id = person.id

GROUP BY hobi.hobi
;";

$result = mysqli_query($conn, $query);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>soal 2</title>
</head>

<body>
  <div>
    <input type="text" placeholder="search by hobi" name="hobi">
  </div>
  <table>
    <tr>
      <th>Hobi</th>
      <th>Jumlah person</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td><?php echo $row['hobi']; ?></td>
        <td><?php echo $row['jumlah_person']; ?></td>
      </tr>
    <?php endwhile ?>
  </table>
</body>

</html>