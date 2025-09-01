<?php
include_once "LogicalTest.php";

$result = "";
if (isset($_POST["percentage"])) {
    $number = $_POST["percentage"];
    $result = LogicalTest::Result($number);
    echo $result;
}
?>

 <form method="post">
      <label for="percentage">Give the percentage Number</label> <br>
      <input type="text" name="percentage" id="percentage" required /> <br /><br>
      <button type="submit">Submit</button>
</form>