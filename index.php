<!DOCTYPE html>
<html>
<head>
  <title>Simple Caculator</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php
      include_once 'caculate.php';
      $Number = new Caculate();
      $result = "";
      $firstNumber ="";
      $secondNumber = "";

      if (isset($_POST['firstNumber']) && isset($_POST['secondNumber'])) {
        $firstNumber = $_POST['firstNumber'];
        $secondNumber = $_POST['secondNumber'];

        if ($_POST['addition']=="+") {
          $result = $Number->Total($_POST['firstNumber'] , $_POST['secondNumber']);
        }else{
          $result = $Number->Brand($_POST['firstNumber'] , $_POST['secondNumber']);
        }
      }

   ?>

  <div class="content">
   <b><h1>Simple Caculator</h1></b>
   <form method="post" action="#">
      <div class="row">
        First Number:
        <input class="firstNumber" type="Number" name="firstNumber" value="<?php echo $firstNumber ?>">
      </div>

        <div class="row">
        Opertor:
        <select name="addition">
          <option value="+">addition (+)</option>
          <option value="-">addition (-)</option>
        </select>
      </div>

      <div class="row">
        Second Number:
        <input type="Number" name="secondNumber" value="<?php echo $secondNumber ?>">
      </div>

      <div class="row">
        <p>Result: <?php echo $result; ?></p>
      </div>

      <div class="row">
        <input class="button" type="submit" name="Cacule">
      </div>

    </form>
  </div>

</body>
</html>
