<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>calculation</title>
  <link rel="icon" href="/Calculator/phpcalc/images/calc.png" type="image/png">
  <style>
    body {
      background-color: #478589;
      color: #f1f1f1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding-top: 100px;
    }

    h1{
      font-size: 4rem;
      color: #f1f1f1;
      margin: 0;
    }

    p{
      font-style: italic;
      color: rgba(241, 241, 241, 0.5);
      margin: 0;
      padding-bottom: 50px;
    }
  </style>
</head>
<body>
<h1>PHPCalc</h1>
<p>{my first time using php code}</p>
<?php

function myCalculator($num01, $oper, $num02) {
    $sum;
    // this declaration of sum is necessary to call it
     switch ($oper){
      case "add":
        if ($num01 == null || $num02 == null) {
          $sum = "You need to enter numbers silly!";
        } else {
          $sum = $num01 + $num02;
        }
        break;
      case "sub":
        if ($num01 == null || $num02 == null) {
          $sum = "You need to enter numbers silly!";
        } else {
          $sum = $num01 - $num02;
        }
        break;
      case "multiply":
        if ($num01 == null || $num02 == null) {
          $sum = "You need to enter numbers silly!";
        } else {
          $sum = $num01 * $num02;
        }
        break;
      case "divide":
        if ($num01 == null || $num02 == null) {
          $sum = "You need to enter numbers silly!";
        } else {
          $sum = $num01 / $num02;
        }
        break;
      // good to have default if goes wrong
      default:
        $sum = "There's an error!";
        break;
     }
     return $sum;
}

// creating variables to carry over
$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];

echo "calculation: " . myCalculator($num01, $oper, $num02);
echo '<br><br>';
echo '<a href="/Calculator/project.php">want to do another calculation?</a>';
?>
</body>
</html>
