<!-- 1....1.	Check if a number is positive or negative using if -->


<!-- 

<h2>JavaScript: Positive or Negative</h2>
<input type="number" id="jsNum" placeholder="Enter number">
<button type="button" onclick="checkNumber()">Check JS</button>
<h3 id="jsResult"></h3>

<script>
function checkNumber() {
    let num = document.getElementById("jsNum").value;
    let result = "";

    if (num > 0) {
        result = `${num} is Positive`;
    } else if (num < 0) {
        result = `${num} is Negative`;
    } else {
        result = `Number is Zero`;
    }

    document.getElementById("jsResult").innerText = result;
}
</script> -->







<!-- 1....1.	Check if a number is positive or negative using if -->


<!-- 
<?php

$number = null;
$result = null;

// Function to check positive or negative
function checkNumber($num) {
    if ($num > 0) {
        return "$num is Positive";
    } elseif ($num < 0) {
        return "$num is Negative";
    } else {
        return "Number is Zero";
    }
}

if (isset($_GET['btn_submit'])) {
    $number = $_GET['number'];
    // Call the function
    $result = checkNumber($number);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Positive or Negative</title>
</head>
<body>
    <?php 
    if ($result !== null) {
        echo "<h1>$result</h1>"; 
    }
    ?>
    <form action="" method="GET">
        <label>Enter a Number</label><br>
        <input type="text" name="number" value="<?php echo $number; ?>"><br><br>

        <button type="submit" name="btn_submit">Check</button>
    </form>
</body>
</html> -->









<!-- 2.	Check if a number is even or odd using ternary -->
<!-- 

<h2>JavaScript: Even or Odd</h2>
<input type="number" id="jsNum" placeholder="Enter number">
<button type="button" onclick="checkEvenOdd()">Check JS</button>
<h3 id="jsResult"></h3>

<script>
function checkEvenOdd() {
    let num = document.getElementById("jsNum").value;
    let result = (num % 2 === 0) ? `${num} is Even` : `${num} is Odd`;
    document.getElementById("jsResult").innerText = result;
}
</script> -->








<!-- 2.	Check if a number is even or odd using ternary -->



<!-- 

<?php

$number = null;
$result = null;

// Function to check even or odd
function checkEvenOdd($num) {
    return ($num % 2 === 0) ? "$num is Even" : "$num is Odd";
}

// Wrapper with callback
function calculateWithCallback($num, $callback) {
    return $callback($num);
}

if (isset($_GET['btn_submit'])) {
    $number = $_GET['number'];
    $result = calculateWithCallback($number, 'checkEvenOdd');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Even or Odd</title>
</head>
<body>
    <?php 
    if ($result !== null) {
        echo "<h1>$result</h1>"; 
    }
    ?>
    <form action="" method="GET">
        <label>Enter a Number</label><br>
        <input type="text" name="number" value="<?php echo $number; ?>"><br><br>

        <button type="submit" name="btn_submit">Check</button>
    </form>
</body>
</html>
 -->


<!-- 




3.	Find the largest of two numbers using if


<h2>JavaScript: Largest of Two Numbers</h2>
<input type="number" id="num1" placeholder="Enter first number">
<input type="number" id="num2" placeholder="Enter second number">
<button type="button" onclick="findLargest()">Check JS</button>
<h3 id="jsResult"></h3>

<script>
function findLargest() {
    let a = parseFloat(document.getElementById("num1").value);
    let b = parseFloat(document.getElementById("num2").value);
    let result = "";

    if (a > b) {
        result = `${a} is the Largest`;
    } else if (b > a) {
        result = `${b} is the Largest`;
    } else {
        result = "Both numbers are equal";
    }

    document.getElementById("jsResult").innerText = result;
}
</script>
 -->








<!-- 3.	Find the largest of two numbers using if -->
<!-- 

<?php

$number1 = null;
$number2 = null;
$largest = null;

// Function to find largest of two numbers
function findLargest($a, $b) {
    if ($a > $b) {
        return "$a is the Largest";
    } elseif ($b > $a) {
        return "$b is the Largest";
    } else {
        return "Both numbers are equal";
    }
}

// Wrapper with callback
function calculateWithCallback($a, $b, $callback) {
    return $callback($a, $b);
}

if (isset($_GET['btn_submit'])) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];

    $largest = calculateWithCallback($number1, $number2, 'findLargest');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Largest of Two Numbers</title>
</head>
<body>
    <?php 
    if ($largest !== null) {
        echo "<h1>$largest</h1>"; 
    }
    ?>
    <form action="" method="GET">
        <label>Enter First Number</label><br>
        <input type="text" name="number1" value="<?php echo $number1; ?>"><br><br>

        <label>Enter Second Number</label><br>
        <input type="text" name="number2" value="<?php echo $number2; ?>"><br><br>

        <button type="submit" name="btn_submit">Check</button>
    </form>
</body>
</html> -->








<!-- 4.	Check if a number is divisible by both 3 and 5 using if -->


<!-- 
<h2>JavaScript: Divisible by 3 and 5</h2>
<input type="number" id="jsNum" placeholder="Enter number">
<button type="button" onclick="checkDivisible()">Check JS</button>
<h3 id="jsResult"></h3>

<script>
function checkDivisible() {
    let num = parseInt(document.getElementById("jsNum").value);
    let result = "";

    if (num % 3 === 0 && num % 5 === 0) {
        result = `${num} is divisible by both 3 and 5`;
    } else {
        result = `${num} is not divisible by both 3 and 5`;
    }

    document.getElementById("jsResult").innerText = result;
}
</script>
 -->





<!-- 4.	Check if a number is divisible by both 3 and 5 using if -->
<!-- 

<?php

$number = null;
$result = null;

// Function to check divisibility by 3 and 5
function checkDivisible($num) {
    if ($num % 3 === 0 && $num % 5 === 0) {
        return "$num is divisible by both 3 and 5";
    } else {
        return "$num is not divisible by both 3 and 5";
    }
}

// Wrapper with callback
function calculateWithCallback($num, $callback) {
    return $callback($num);
}

if (isset($_GET['btn_submit'])) {
    $number = $_GET['number'];
    $result = calculateWithCallback($number, 'checkDivisible');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Divisible by 3 and 5</title>
</head>
<body>
    <?php 
    if ($result !== null) {
        echo "<h1>$result</h1>"; 
    }
    ?>
    <form action="" method="GET">
        <label>Enter a Number</label><br>
        <input type="text" name="number" value="<?php echo $number; ?>"><br><br>

        <button type="submit" name="btn_submit">Check</button>
    </form>
</body>
</html> -->





<!-- 5.	Assign default name using ternary: -->


<!-- <h2>JavaScript: Assign Default Name</h2>
<input type="text" id="jsName" placeholder="Enter your name">
<button type="button" onclick="assignName()">Check JS</button>
<h3 id="jsResult"></h3>

<script>
function assignName() {
    let name = document.getElementById("jsName").value;
    // Ternary operator for default value
    let result = name ? `Your name is ${name}` : "Your name is Default Name";
    document.getElementById("jsResult").innerText = result;
}
</script> -->




<!-- 5.	Assign default name using ternary: -->

<!-- 
<?php

$name = null;
$result = null;

// Function to assign default name using ternary
function assignDefaultName($name) {
    return $name ? "Your name is $name" : "Your name is Default Name";
}

// Wrapper with callback
function calculateWithCallback($value, $callback) {
    return $callback($value);
}

if (isset($_GET['btn_submit'])) {
    $name = $_GET['name'];
    $result = calculateWithCallback($name, 'assignDefaultName');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Default Name</title>
</head>
<body>
    <?php 
    if ($result !== null) {
        echo "<h1>$result</h1>"; 
    }
    ?>
    <form action="" method="GET">
        <label>Enter your name</label><br>
        <input type="text" name="name" value="<?php echo $name; ?>"><br><br>

        <button type="submit" name="btn_submit">Check</button>
    </form>
</body>
</html>


 -->



<!-- 6.	Display "Adult" or "Child" or “Middle aged”: -->


<!-- 
<h2>JavaScript: Age Category</h2>
<input type="number" id="jsAge" placeholder="Enter your age">
<button type="button" onclick="checkAge()">Check JS</button>
<h3 id="jsResult"></h3>

<script>
function checkAge() {
    let age = parseInt(document.getElementById("jsAge").value);
    let result = "";

    if (age < 18) {
        result = `Child`;
    } else if (age >= 18 && age <= 40) {
        result = `Adult`;
    } else {
        result = `Middle aged`;
    }

    document.getElementById("jsResult").innerText = result;
}
</script> -->





<!-- 6.	Display "Adult" or "Child" or “Middle aged”: -->

<!-- 
<?php

$age = null;
$result = null;

// Function to display age category
function ageCategory($age) {
    if ($age < 18) {
        return "Child";
    } elseif ($age >= 18 && $age <= 40) {
        return "Adult";
    } else {
        return "Middle aged";
    }
}

// Wrapper with callback
function calculateWithCallback($age, $callback) {
    return $callback($age);
}

if (isset($_GET['btn_submit'])) {
    $age = $_GET['age'];
    $result = calculateWithCallback($age, 'ageCategory');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Category</title>
</head>
<body>
    <?php 
    if ($result !== null) {
        echo "<h1>$result</h1>"; 
    }
    ?>
    <form action="" method="GET">
        <label>Enter your age</label><br>
        <input type="text" name="age" value="<?php echo $age; ?>"><br><br>

        <button type="submit" name="btn_submit">Check</button>
    </form>
</body>
</html> -->








<!-- 7.	Display "Is_Login” -->



<!-- <h2>JavaScript: Display Is_Login</h2>
<button type="button" onclick="displayLogin()">Show Login Status</button>
<h3 id="jsResult"></h3>

<script>
function displayLogin() {
    let result = `Is_Login`;
    document.getElementById("jsResult").innerText = result;
}
</script> -->



<!-- 7.	Display "Is_Login” -->


<!-- 
<?php

$result = null;

// Function to display login status
function displayLoginStatus() {
    return "Is_Login";
}

// Wrapper with callback
function calculateWithCallback($callback) {
    return $callback();
}

if (isset($_GET['btn_submit'])) {
    $result = calculateWithCallback('displayLoginStatus');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Is_Login</title>
</head>
<body>
    <?php 
    if ($result !== null) {
        echo "<h1>$result</h1>"; 
    }
    ?>
    <form action="" method="GET">
        <button type="submit" name="btn_submit">Show PHP Login Status</button>
    </form>
</body>
</html>
 -->






 <!-- 8.	Driving license and car who can drive the car -->


<!-- 
<h2>JavaScript: Who Can Drive</h2>
<input type="text" id="jsName" placeholder="Enter Name">
<input type="number" id="jsAge" placeholder="Enter Age">
<input type="checkbox" id="jsLicense"> Has Driving License<br><br>
<button type="button" onclick="canDrive()">Check JS</button>
<h3 id="jsResult"></h3>

<script>
function canDrive() {
    let name = document.getElementById("jsName").value;
    let age = parseInt(document.getElementById("jsAge").value);
    let hasLicense = document.getElementById("jsLicense").checked;
    let result = "";

    if (age >= 18 && hasLicense) {
        result = `${name} can drive the car`;
    } else {
        result = `${name} cannot drive the car`;
    }

    document.getElementById("jsResult").innerText = result;
}
</script>
 -->





<!-- 8.	Driving license and car who can drive the car -->



<!-- 
 <?php

$name = null;
$age = null;
$hasLicense = null;
$result = null;

// Function to check driving eligibility
function canDrive($name, $age, $hasLicense) {
    if ($age >= 18 && $hasLicense) {
        return "$name can drive the car";
    } else {
        return "$name cannot drive the car";
    }
}

// Wrapper with callback
function calculateWithCallback($name, $age, $hasLicense, $callback) {
    return $callback($name, $age, $hasLicense);
}

if (isset($_GET['btn_submit'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
    $hasLicense = isset($_GET['license']) ? true : false;

    $result = calculateWithCallback($name, $age, $hasLicense, 'canDrive');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driving Eligibility</title>
</head>
<body>
    <?php 
    if ($result !== null) {
        echo "<h1>$result</h1>"; 
    }
    ?>
    <form action="" method="GET">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo $name; ?>"><br><br>

        <label>Age:</label><br>
        <input type="number" name="age" value="<?php echo $age; ?>"><br><br>

        <label>Has Driving License:</label>
        <input type="checkbox" name="license" <?php if($hasLicense) echo "checked"; ?>><br><br>

        <button type="submit" name="btn_submit">Check PHP</button>
    </form>
</body>
</html> -->






<!-- 9.	Find the largest of three numbers using if -->

<!-- 


<h2>JavaScript: Largest of Three Numbers</h2>
<input type="number" id="num1" placeholder="Enter first number">
<input type="number" id="num2" placeholder="Enter second number">
<input type="number" id="num3" placeholder="Enter third number">
<button type="button" onclick="findLargest()">Check JS</button>
<h3 id="jsResult"></h3>

<script>
function findLargest() {
    let a = parseFloat(document.getElementById("num1").value);
    let b = parseFloat(document.getElementById("num2").value);
    let c = parseFloat(document.getElementById("num3").value);
    let result = "";

    if (a > b && a > c) {
        result = `${a} is the Largest`;
    } else if (b > a && b > c) {
        result = `${b} is the Largest`;
    } else if (c > a && c > b) {
        result = `${c} is the Largest`;
    } else {
        result = "Some numbers are equal";
    }

    document.getElementById("jsResult").innerText = result;
}
</script>
 -->





 <!-- 9.	Find the largest of three numbers using if -->


<!-- 
<?php

$number1 = null;
$number2 = null;
$number3 = null;
$largest = null;

// Function to find largest of three numbers
function findLargest($a, $b, $c) {
    if ($a > $b && $a > $c) {
        return "$a is the Largest";
    } elseif ($b > $a && $b > $c) {
        return "$b is the Largest";
    } elseif ($c > $a && $c > $b) {
        return "$c is the Largest";
    } else {
        return "Some numbers are equal";
    }
}

// Wrapper with callback
function calculateWithCallback($a, $b, $c, $callback) {
    return $callback($a, $b, $c);
}

if (isset($_GET['btn_submit'])) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $number3 = $_GET['number3'];

    $largest = calculateWithCallback($number1, $number2, $number3, 'findLargest');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest of Three Numbers</title>
</head>
<body>
    <?php 
    if ($largest !== null) {
        echo "<h1>$largest</h1>"; 
    }
    ?>
    <form action="" method="GET">
        <label>Enter First Number</label><br>
        <input type="text" name="number1" value="<?php echo $number1; ?>"><br><br>

        <label>Enter Second Number</label><br>
        <input type="text" name="number2" value="<?php echo $number2; ?>"><br><br>

        <label>Enter Third Number</label><br>
        <input type="text" name="number3" value="<?php echo $number3; ?>"><br><br>

        <button type="submit" name="btn_submit">Check</button>
    </form>
</body>
</html> -->





<!-- 1.	Factorial 
2.	Prime Number
3.	Result 
4.	Count the negative positive and their sum of this 
array   [5,6,-9,8,0,7,6,7,-5,-3,7,0] -->


<!-- 

<h2>JavaScript: Factorial</h2>
<input type="number" id="jsNum" placeholder="Enter number">
<button type="button" onclick="calculateFactorial()">Check JS</button>
<h3 id="jsResult"></h3>

<script>
function calculateFactorial() {
    let num = parseInt(document.getElementById("jsNum").value);
    let result = 1;

    for(let i=1; i<=num; i++){
        result *= i;
    }

    document.getElementById("jsResult").innerText = `Factorial of ${num} is ${result}`;
}
</script>





<h2>JavaScript: Prime Number Check</h2>
<input type="number" id="primeNum" placeholder="Enter number">
<button type="button" onclick="checkPrime()">Check JS</button>
<h3 id="jsPrimeResult"></h3>

<script>
function checkPrime() {
    let num = parseInt(document.getElementById("primeNum").value);
    let isPrime = true;

    if(num < 2){
        isPrime = false;
    } else {
        for(let i=2;i<=Math.sqrt(num);i++){
            if(num % i === 0){
                isPrime = false;
                break;
            }
        }
    }

    document.getElementById("jsPrimeResult").innerText = isPrime ? `${num} is Prime` : `${num} is Not Prime`;
}
</script>






<h2>JavaScript: Result (Square of Number)</h2>
<input type="number" id="resNum" placeholder="Enter number">
<button type="button" onclick="calculateResult()">Check JS</button>
<h3 id="jsRes"></h3>

<script>
function calculateResult(){
    let num = parseInt(document.getElementById("resNum").value);
    let result = num*num;
    document.getElementById("jsRes").innerText = `Result: ${result}`;
}
</script>







<h2>JavaScript: Count Positive, Negative & Sum</h2>
<button type="button" onclick="arrayStats()">Check JS</button>
<h3 id="jsArrResult"></h3>

<script>
function arrayStats(){
    let arr = [5,6,-9,8,0,7,6,7,-5,-3,7,0];
    let posCount=0, negCount=0, sum=0;

    arr.forEach(num=>{
        if(num>0) posCount++;
        else if(num<0) negCount++;
        sum += num;
    });

    let result = `Positive Count: ${posCount}, Negative Count: ${negCount}, Sum: ${sum}`;
    document.getElementById("jsArrResult").innerText = result;
}
</script>
 -->














<?php
$number = null;
$result = null;

function factorial($num) {
    $fact = 1;
    for($i=1;$i<=$num;$i++){
        $fact *= $i;
    }
    return $fact;
}

function calculateWithCallback($num, $callback) {
    return $callback($num);
}

if(isset($_GET['btn_submit'])){
    $number = $_GET['number'];
    $result = calculateWithCallback($number,'factorial');
}
?>
<form action="" method="GET">
<input type="text" name="number" value="<?php echo $number; ?>" placeholder="Enter number">
<button type="submit" name="btn_submit">Check PHP</button>
</form>
<?php if($result!==null){ echo "<h1>Factorial of $number is $result</h1>"; } ?>








<?php
$primeNum = null;
$primeResult = null;

function isPrime($num){
    if($num<2) return false;
    for($i=2;$i<=sqrt($num);$i++){
        if($num % $i == 0) return false;
    }
    return true;
}

function calculateWithCallback($num, $callback){
    return $callback($num);
}

if(isset($_GET['btn_prime'])){
    $primeNum = $_GET['primeNum'];
    $primeResult = calculateWithCallback($primeNum,'isPrime') ? "$primeNum is Prime" : "$primeNum is Not Prime";
}
?>
<form action="" method="GET">
<input type="text" name="primeNum" value="<?php echo $primeNum; ?>" placeholder="Enter number">
<button type="submit" name="btn_prime">Check PHP</button>
</form>
<?php if($primeResult!==null){ echo "<h1>$primeResult</h1>"; } ?>








<?php
$resNum = null;
$resResult = null;

function squareNumber($num){
    return $num*$num;
}

function calculateWithCallback($num, $callback){
    return $callback($num);
}

if(isset($_GET['btn_res'])){
    $resNum = $_GET['resNum'];
    $resResult = calculateWithCallback($resNum,'squareNumber');
}
?>
<form action="" method="GET">
<input type="text" name="resNum" value="<?php echo $resNum; ?>" placeholder="Enter number">
<button type="submit" name="btn_res">Check PHP</button>
</form>
<?php if($resResult!==null){ echo "<h1>Result: $resResult</h1>"; } ?>








<?php
$arr = [5,6,-9,8,0,7,6,7,-5,-3,7,0];
$arrResult = null;

function arrayStats($array){
    $pos=0; $neg=0; $sum=0;
    foreach($array as $num){
        if($num>0) $pos++;
        elseif($num<0) $neg++;
        $sum += $num;
    }
    return "Positive Count: $pos, Negative Count: $neg, Sum: $sum";
}

function calculateWithCallback($arr,$callback){
    return $callback($arr);
}

$arrResult = calculateWithCallback($arr,'arrayStats');
?>
<h1><?php echo $arrResult; ?></h1>






