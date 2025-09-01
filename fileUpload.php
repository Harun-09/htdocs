<?php
include_once "LogicalTest.php";

$uploadedFileName = "";

if (isset($_POST['btnSubmit']) && isset($_FILES['myfile'])) {
    $result = LogicalTest::FileUpload($_FILES['myfile']);
    if (!empty($result["success"])) {
        echo $result["success"];
        $uploadedFileName = $result["uploadedFileName"];
    } else {
        echo $result["error"];
    }
}
?>

 <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <button type="submit" name="btnSubmit">Upload</button>
 </form>

  <?php
    if ($uploadedFileName) {
        $ext = pathinfo($uploadedFileName, PATHINFO_EXTENSION);
        if (in_array(strtolower($ext), ['jpg','jpeg','png','gif'])) {
            echo "<img src='uploads/$uploadedFileName' alt='Preview' width='300'>";
        }
    }
    ?>