<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .box {
    width: 500px;
    height: 500px;
    border: 1px solid;
    border-radius: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

  .title {
    display: flex;
    justify-content: center;
    flex-direction: column;
    text-align: center;
  }

  .buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px;
  }

  .card {
    display: flex;
    justify-content: center;
    width: 200px;
  }

  .card button {
    padding: 20px 20px;
  }
</style>

<body>
  <div class="container">
    <div class="box">
      <div class="title">
        <h2>PHP TEST SOAL A</h2>
        <p>Hairul Ardhan Nawazaki</p>
      </div>
      <div class="buttons">
        <div class="card">
          <button onclick="window.location.href='soal-1/soal1a.php'">SOAL 1</button>
        </div>
        <div class="card">
          <button onclick="window.location.href='soal-2/soal2.php'">SOAL 2</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>