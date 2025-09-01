<?php
$fineName = null;
if(isset($_POST['btnSubmit'])){
// print_r($_FILES);
$file = $_FILES['myfile'];
$name =$file['name'];
$fileTmp = $file['tmp_name'];
$fileSize = $file['size'];
$fileType= $file['type'];
$folder = "uploads/";

$allowsize = 2*1024*1024;

$allowedMimeType =[
    'image/jpeg','image/png','image.gif','application/pdf',
];

$ext = pathinfo($name, PATHINFO_EXTENSION);
$newName= uniqid("pic_", true)."." . $ext;

if(!is_dir($folder)){
    mkdir($folder, 0777, true);
}

 if($fileSize> $allowsize){
        die("file is too large. max allowed;".($allowsize/1024/1024)."MB");
    }

    if(!in_array($fileType, $allowedMimeType)){
        die("Invalid file type (mime not allowed):".$fileType);
    }

    if(move_uploaded_file($fileTmp, $folder . $name)){
        echo "file uploaded successfully:" . $name;
    }else{
        echo "Failed to upload file.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>File Upload</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile" id="">
        <button type="submit" name="btnSubmit">Upload</button>
    </form>

    <embed src="uploads/<?php echo $name ?>" type="">
</body>
</html>