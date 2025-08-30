<?php
include_once "LogicalTest.php"; 

if (isset($_POST["number"])) {
    $num = $_POST["number"];
    $result = LogicalTest::factorial($num);
    echo "Factorial of $num is: $result";
}
?>
<br>
<br>

<form method="post">
    Enter a number: <input type="text" name="number" required>
    <input type="submit" value="Factiorial Check">
</form>
