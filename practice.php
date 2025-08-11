<!-- <?php
$result =1;
$number = null;
if (isset($_GET['btn_submit'])){
    $number = $_GET['number'];
    for ($i=1; $i<=$number; $i++){
        $result *=$i;
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
    <?php
    $result= $result>1?$result:"";
    echo "<h1 class=''>Factorial of $number is $result</h1>";
    ?>
    <form action="" method="GET">
<label for="n">Give The Number</label><br><br>
<input type="text" name="number" id="" value="<?php echo $number ?>"><br><br>
<button type="submit" name="btn_submit">Submit</button>
    </form>
</body>
</html> -->














<!-- <?php
$result=null;
if(isset(($_GET['btn_submit']))){
    $mark = $_GET['number'];
    if($mark>=80 && $mark<=100){
        $result="A+";
    }else if($mark>=70 && $mark<80){
        $result="A";
    }else if($mark>=60 && $mark<70){
        $result= "A-";
    }else if($mark>=50 && $mark<60){
        $result= "B";
    }else{
        $result="Fail";
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
<style>
    .red{
        color:red;
    }
    .green{
        color:green;
    }
</style>
<body>
    <?php
if ($result =="Fail"){
    echo"<h1 class='red'>Result is $result</h1>";
}else{
    echo"<h1 class='green'>Result is $result</h1>";
}
?>

<form action="practice.php" method="GET">
    <label for="m">Give the obtain marks</label><br>
    <input type="text" name="number" id=""><br><br>
    <button type="submit" name="btn_submit">Submit</button>
</form>
</body>
</html> -->








<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .red{
        color: red;
    }
    .green{
        color: green;
    }
</style>
<body>
    
<h1 id="abc" class="green"></h1>

<label for="m">Give the obtain mark</label><br>
<input type="text" name="number" id="number"><br><br>

<button type="submit" name="btn_submit">Submit</button>


<script>
let number = document.getElementById("number");
number.addEventListener("keyup",function(){
    let result = null;
let mark= this.value;
if (mark>=80 && mark <=100){
    result="A+"
}else if(mark>=70 && mark<80){
    result = "A";
}else if (mark >= 60 &&  mark < 70) {
                result = "A-";
            } else if (mark >= 50 &&  mark < 60) {
                result = "B";
            } else {
                result = "Fail";
            }

           document.getElementById("abc").innerText= "Result is"+ result;



}); -->



</script>
</body>
</html>
