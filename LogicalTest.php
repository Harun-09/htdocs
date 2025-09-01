<?php


interface ILogicalTest{
   static function factorial($number);
   static function IsPrime($number);
   static function minMax($n1, $n2, $n3);
   static function Result($number);
   static function FileUpload($file);
}





class LogicalTest implements ILogicalTest{

static function factorial($number){
 $result = 1;

  for($i=1; $i<=$number; $i++){
     $result *=$i;
  }
  return $result;
}

static function IsPrime($number){

  if($number < 2){return false;} 
  for($i=2; $i< $number; $i++){
    if($number%$i == 0){
       return false;
    }
  }
  return true;
}


 static function minMax($n1, $n2, $n3){
       
        if ($n1 >= $n2 && $n1 >= $n3) {
        return "$n1 is the Largest Number among $n1, $n2, $n3";
        } elseif ($n2 >= $n1 && $n2 >= $n3) {
        return "$n2 is the Largest Number among $n1, $n2, $n3";
        } else {
        return "$n3 is the Largest Number among $n1, $n2, $n3";
        }
     }


 static function Result($number){
    if ($number >= 80 && $number <= 100) {
        return "A+";
    } elseif ($number >= 70 && $number <= 79) {
        return "A";
    } else {
        return "Fail";
    }
  }




  
static function FileUpload($file) {
    $uploadedFileName = "";
    $error = "";
    $folder = "uploads/";

    $fileName = $file['name'];
    $fileTmp = $file['tmp_name'];

    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    if (move_uploaded_file($fileTmp, $folder . $fileName)) {
        $uploadedFileName = $fileName;
    } else {
        $error = "Failed to upload file.";
    }

    return [
        "success" => $uploadedFileName ? "File uploaded successfully: $uploadedFileName" : "",
        "error" => $error,
        "uploadedFileName" => $uploadedFileName
    ];
}
}
?>