<?php

function validateForm($count, $form)
{
  return !empty($count); // This line is to validate if the form is nos empty.
}
$status = ""; //the string is empty ("") because when start are not "success" or "fail".
if (isset($_POST["form"])) {
  if (validateForm(...$_POST)) {
    $count = $_POST["count"];
    $status = "success";
  } else {
    $status = "fail";
  }
}
// This is the values to do the Fibonacci.
$startCount = 0;
$number0 = 0;
$number1 = 1;
$toNumber = $count;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fibonacci Challenge</title>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles/style.css">
</head>

<body class="flex">

  <form action="./" method="POST" class="flex">
    <h1> Fibonacci Challenge! </h1>
    <label for="count">Ingresa el valor límite de la sucesión de Fibonacci: </label>
    <input type="number" name="count" id="count">
    <button name="form" type="submit">Send</button>

    <?php if ($status == "fail") : ?>
      <div class="alert fail">
        <span>Tenemos problemas, debes ingresar un valor numérico.</span>
      </div>
    <?php endif; ?>
    <?php if ($status == "success") : ?>
      <div class="alert success">
        <span>
          <?php
          do {
            $number2 = $number1 + $number0;
            $number0 = $number1;
            $number1 = $number2;
            $startCount++;
            echo $number0 . ", ";
          } while ($startCount < $toNumber);
          ?>
        </span>
      </div>
    <?php endif; ?>
  </form>

</body>

</html>