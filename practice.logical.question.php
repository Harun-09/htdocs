<!-- Count Vowels in a String -->


<form method="post">
    Enter a word: <input type="text" name="word" required>
    <input type="submit" value="Count Vowels">
</form>

<?php
if (isset($_POST["word"])) {
    $str = $_POST["word"];

    function countVowels($str) {
        $vowels = ['a','e','i','o','u','A','E','I','O','U'];
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if (in_array($str[$i], $vowels)) {
                $count++;
            }
        }
        return $count;
    }

      echo "The word $str has " . countVowels($str) . " vowels.";
}
?>

<br>


<!-- Reverse String -->

<form method="post">
    Enter a word: <input type="text" name="word" required>
    <input type="submit" value="Reverse">
</form>

<?php
if (isset($_POST["word"])) {
    $str = $_POST["word"];

    function reverseString($str) {
        $reversed = "";
        $len = strlen($str);
        for ($i = $len - 1; $i >= 0; $i--) {
            $reversed .= $str[$i];
        }
        return $reversed;
    }

    echo "Original String: $str <br>";
    echo "Reversed String: " . reverseString($str);
}
?>


<!-- //Challenge 3: Check if a Number is Prime -->

<form method="post">
Enter a number: <input  type="text" name="prime" required>
<input type="submit" value="check Prime">
</form>
<?php

if(isset($_POST["prime"])){
    $num = $_POST["prime"];
    function isPrime($num){
        if($num <2){
            return false;
        }
        for($i=2; $i<=sqrt($num); $i++){
            if($num % $i == 0){
                return false;
            }  
        }
       return true;
    }
     echo isPrime($num) ? "$num is a prime number." : "$num is not a prime number.";
}
?>

<!-- Factorial Calculator -->

<form method="post">
  Enter a number: <input type="number" name="fact" required>
  <input type="submit" value="Calculate Factorial">
</form>

<?php

class FactNumber {
    public static function factorial($num) {
        if ($num < 0) {
            return "Undefined numbers";
        }
        $fact = 1;
        for ($i = 1; $i <= $num; $i++) {
            $fact *= $i;
        }
        return $fact;
    }
}

if (isset($_POST["fact"])) {
    $num = $_POST["fact"];
    echo "Factorial of $num is " . FactNumber::factorial($num);
}
?>
<br>


<!-- PHP Form Handling with Validation (Required field check) -->

<?php
$username = "";

if (isset($_POST["username"])) {
  if (!empty($_POST["username"])) {
    $username = htmlspecialchars($_POST["username"]);
  } else {
    echo "<p style='color:red;'>Username is required!</p>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Register</title>
</head>
<body>
  <h2>Login/Register</h2>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" value="<?php echo $username; ?>">
    <input type="submit" value="Submit">
  </form>

  <?php
  if (!empty($username)) {
    echo "<h3>Welcome, <span style='color:green;'>$username</span>!</h3>";
  }
  ?>
</body>
</html>

<br>

<!-- file upload form -->

<?php
$uploadedFileName = "";
$error = "";
$success = "";

if (isset($_POST['btnSubmit']) && isset($_FILES['myfile'])) {
    $file = $_FILES['myfile'];
    $fileTmp = $file["tmp_name"];
    $fileSize = $file["size"];
    $fileType = $file["type"];
    $fileName = $file['name'];
    $folder = "uploads/";

    $allowSize = 2 * 1024 * 1024;
    $allowedMimeType = [
        'image/jpeg',
        'image/png',
        'image/gif',
        'application/pdf',
        "application/msword",
        "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
    ];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $newName = uniqid("file_", true) . "." . $ext;

    
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    if ($fileSize > $allowSize) {
        $error = "File is too large. Max allowed: 2 MB";
    } elseif (!in_array($fileType, $allowedMimeType)) {
        $error = "Invalid file type: $fileType";
    } elseif (move_uploaded_file($fileTmp, $folder . $newName)) {
        $uploadedFileName = $newName;
        $success = "File uploaded successfully: $newName";
    } else {
        $error = "Failed to upload file.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Clean File Upload</title>
</head>
<body>
    <h2>Upload a File</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <button type="submit" name="btnSubmit">Upload</button>
    </form>

    <?php
    if (!empty($success)) echo "<p style='color:green;'>$success</p>";
    if (!empty($error)) echo "<p style='color:red;'>$error</p>";
    ?>

    <?php if (!empty($uploadedFileName)) : ?>
        <?php 
            $ext = pathinfo($uploadedFileName, PATHINFO_EXTENSION);
            if (in_array($ext, ['jpg','jpeg','png','gif'])) {
                echo "<h3>Image Preview:</h3>";
                echo "<img src='uploads/$uploadedFileName' width='300' alt='Image'>";
            } elseif ($ext == 'pdf') {
                echo "<h3>PDF Preview:</h3>";
                echo "<embed src='uploads/$uploadedFileName' type='application/pdf' width='300' height='500'>";
            } elseif (in_array($ext, ['doc','docx'])) {
                echo "<p>Word document uploaded. <a href='uploads/$uploadedFileName' download>Click here to download</a></p>";
            } else {
                echo "<p>File uploaded, preview not available.</p>";
            }
        ?>
    <?php endif; ?>

</body>
</html>

<br>

<!-- Username Validation with Length + '@' Check -->

<?php
$result = "";

if (isset($_POST["username"])) {
  $name = trim($_POST["username"]);

  if (empty($name)) {
    $result = "<span style='color:red;'>Username is required!</span>";
  } elseif (strlen($name) < 4 || strlen($name) > 8) {
    $result = "<span style='color:red;'>Username must be between 4 to 8 characters.</span>";
  } elseif (strpos($name, "@") === false) {
    $result = "<span style='color:red;'>Username must include '@' sign.</span>";
  } else {
    $safeName = htmlspecialchars($name);
    $result = "<span style='color:green;'>Welcome, $safeName! Login successful ✅</span>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Question_01</title>
</head>
<body>
  <h2>Login/Register</h2>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <input type="submit" value="Submit">
  </form>

  <p><?php echo $result; ?></p>
</body>
</html>

