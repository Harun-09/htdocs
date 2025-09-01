<?php
include_once "LogicalTest.php";

if (isset($_POST["largest"])) {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $result = LogicalTest::minMax($n1, $n2, $n3);
    echo $result;
}
?>
<br><br>
<form method="post">
        <label for="n1">Number1</label>
        <input type="text" name="n1" id="n1" required /> <br /><br>
        <label for="n2">Number2</label>
        <input type="text" name="n2" id="n2" required /> <br /><br>
        <label for="n3">Number3</label>
        <input type="text" name="n3" id="n3" required /> <br /><br>
        <button type="submit" name="largest">Submit</button>
</form>
