<?php
include_once "LogicalTest.php"; 

if(isset($_POST["number"])){
    $num = $_POST["number"];
    $result = LogicalTest::IsPrime($num);
    echo $result ? "$num is a prime number." : "$num is not a prime number.";
}
?>
<br><br>
<form method="post">
    Enter a number: <input type="text" name="number" required>
    <input type="submit" value="Check Prime">
</form>


