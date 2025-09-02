<?php
 
 include_once ("employee.class.php");
//  require "employee.class.php";
//  require_once
//  include_once
 
 if(isset($_POST['btn_Name'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    
    $employeeinformation= new employeeinformation($name,$address,$age,$salary,$id);
    $save= $employeeinformation->save();
    if($save){
      echo $save;
      
      unset($_POST['name']);
      unset($_POST['address']);
      unset($_POST['age']);
      unset($_POST['salary']);
      unset($_POST['id']);
     
    } 

 }


// delete function

  if(isset($_GET['id'])){
    $id= $_GET['id'];
    
  echo employeeinformation::delete($id);
  }


//  update function 

if(isset($_POST['btn_update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    
    $employeeinformation= new employeeinformation($name,$address,$age,$salary,$id);
    $update= $employeeinformation->update();
    if($update){
      echo $update;
      unset($_POST['id']);
      unset($_POST['name']);
      unset($_POST['address']);
      unset($_POST['age']);
      unset($_POST['salary']);  
     
    } 

 }



// Edit/serarch function

   $search_employeeinformation=null;
  if(isset($_GET['EditId'])){
    $id= $_GET['EditId'];
    $search_employeeinformation =  employeeinformation::find($id);

    // print_r( $search_employeeinformation);
  }



?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
         <style>
        body{
            display: flex;
            place-content: center;
            gap: 20px;
        }
        table,th,td{
            border-collapse: collapse;
            border: 1px solid black;
            padding: 10px;
        }

        tr:nth-child(even){
           background-color: lightgrey;
        }
     </style>
</head>
<body>
<div>
<h1>employeeinformation Table </h1>
           
             <a href="index.php">New employeeinformation</a>
            <?php 
               echo  employeeinformation::showemployeeinformation(); 
            ?>
</div>

        <?php 
          if( is_null($search_employeeinformation) ) {

         
        
        ?>

       <div>
         <h1> New employeeinformation</h1>
            <form action="" method="POST">
            <label for="n">Id</label> <br>
            <input type="text" name="id" id="id"> <br> <br>
            <label for="n">Give Your Name</label> <br>
            <input type="text" name="name" id="name"> <br> <br>
            <label for="n">Give Your Address</label> <br>
            <input type="text" name="address" id="address"> <br> <br>
            <label for="n">Give Your Age</label> <br>
            <input type="text" name="age" id="age"> <br> <br>
            <label for="n">Give Your Salary</label> <br>
            <input type="text" name="salary" id="salary"> <br> <br>
            <input type="submit" name="btn_Name" >
            </form>
       </div>
        <?php 
        
         }else{

       
        
        ?>

       <div>
         <h1> Update employeeinformation</h1>
            <form action="" method="POST">
            <label for="n">Id</label> <br>
            <input type="text" name="id" id="id"  value="<?php echo $search_employeeinformation->id?>"> <br> <br>
            <label for="n">Give Your Name</label> <br>
            <input type="text" name="name" id="name" value="<?php echo $search_employeeinformation->name ?>"  > <br> <br>
            <label for="n">Give Your Address</label> <br>
            <input type="text" name="address" id="address" value="<?php echo $search_employeeinformation->address ?>"  > <br> <br>
            <label for="n">Give Your Age</label> <br>
            <input type="text" name="age" id="age" value="<?php echo $search_employeeinformation->age ?>"  > <br> <br>
            <label for="n">Give Your Salary</label> <br>
            <input type="text" name="salary" id="salary" value="<?php echo $search_employeeinformation->salary ?>"  > <br> <br>
            <input type="submit" name="btn_update"  value="Update" >
            </form>
       </div>
  
        
    <?php }?>

   
       
        
     

</body>
</html>