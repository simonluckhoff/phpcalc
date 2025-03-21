<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>calculator</title>
  <link rel="icon" href="/Calculator/phpcalc/images/calc.png" type="image/png">
  <style>
    body{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding-top: 100px;
      background-color: #478589;
    }

    .body-calc{
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top: 50px;
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
    }

    @media (max-width: 400px) {
      .body-calc{
        padding-left: 70px;
      }
  }
  </style>
</head>
<body>
  <h1>PHPCalc</h1>
  <p>{my first time using php code}</p>
  <div class="body-calc">
    <form action="functions.php" method="get">
      <input type="text" name="num01" placeholder="number 1">
      <select name="oper">
        <label>Choose Operation!</label>
        <option value="add">add</option>
        <option value="sub">minus</option>
        <option value="multiply">multiply</option>
        <option value="divide">divide</option>
      </select>
      <input type="text" name="num02" placeholder="number 2">
      <button value="calc" type="submit">calculate</button>
    </form>
  </div>
</body>
</html>


<!-- post is for sensitive data -->
<!-- select is a dropdown element -->
