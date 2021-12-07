<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="assets/js/script.js"></script>
  <title>Zajecia PHP</title>
</head>

<body>
  <form action="src/insert.php" method="POST">
    <input name="wartosc">
    <button type="submit">Wyslij</button>
  </form>
  <form>
    <input id="wartosc">
    <button id="wyslij">Wyslij</button>
  </form>
  <?php
  include 'src/select.php';
  ?>
</body>

</html>