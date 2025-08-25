<?php
include ("product.class.php");

if(isset($_POST['btn_Name'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $offerPrice = $_POST['offerPrice'];

    $product= new Product($id,$name,$price,$offerPrice);
    $save = $product->save();
    if($save){
        echo $saved;
        unset($_POST['id']);
        unset($_POST['name']);
        unset($_POST['price']);
        unset($_POST['offerPrice']);
    }
}


  if(isset($_GET['id'])){
    $id= $_GET['id'];
    Product::delete($id);
  }

    $search_product=null;
  if(isset($_GET['EditId'])){
    $id= $_GET['EditId'];
    $search_product =  Product::search($id);
  }

  
if(isset($_POST['btn_update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $offerPrice = $_POST['offerPrice'];

    $product= new Product($id,$name,$price,$offerPrice);
    $update = $product->update();
    if($update){
        echo $update;
        unset($_POST['id']);
        unset($_POST['name']);
        unset($_POST['price']);
        unset($_POST['offerPrice']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <h1>Product Table</h1>
    <a href="index.php">New Product</a>
    <?php
    echo Product::showProduct();
    ?>
</div>
<?php
if(is_null($search_product)){

    ?>
    <div>
        <h1>New Product</h1>
        <form action="" method="post">
             <label for="n">Id</label> <br>
            <input type="text" name="id" id="id"> <br> <br>
            <label for="n">Name</label> <br>
            <input type="text" name="name" id="name"> <br> <br>
            <label for="p">Price</label><br>
            <input type="text" name="price" id=""><br><br>
            <label for="op">Offer Price</label><br>
            <input type="text" name="offerPrice" id=""><br><br>
            <input type="submit" name="btn_Name" id="">
        </form>

    </div>
    <?php

} else{
    ?>
    
    <div>
<h1>Update Product</h1>
        <form action="" method="post">
             <label for="n">Id</label> <br>
            <input type="text" name="id" id="id" value="<?php echo $search_product['id']; ?>" <br> <br>
            <label for="n">Name</label> <br>
            <input type="text" name="name" id="name" value="<?php echo $search_product['name'];?>" <br> <br>
            <label for="p">Price</label><br>
            <input type="text" name="price" id="" value="<?php echo $search_product['price']; ?>" <br><br>
            <label for="op">Offer Price</label><br>
            <input type="text" name="offerPrice" id="" value="<?php echo $search_product['offerPrice']; ?>" <br><br>
            <input type="submit" name="btn_update" id="" value="Update">
        </form>
    </div>

    <?php
}
?>

</body>
</html>