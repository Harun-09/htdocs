<?php

class Product{

    public $id;
    public $name;
    public $price;
    public $offerPrice;

    public function __construct($_id,$_name,$_price,$_offerPrice)
    {
        $this->id=$_id;
        $this->name=$_name;
        $this->price=$_price;
        $this->offerPrice=$_offerPrice;
    }

    public function save(){
        $data ="$this->id,$this->name,$this->price,$this->offerPrice";
        if(file_exists("productdata.txt") && filesize("productdata.txt") > 0 ){
            $data=PHP_EOL.$data;
        }
        file_put_contents("productdata.txt",$data,FILE_APPEND);
        return "Data Saved Successfully";
    }

    public static function showProduct(){
        $data = file("productdata.txt",FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
        $html ="<table>";
        $html.="<tr><th>ID</th><th>Name</th><th>Price</th><th>Offer Price</th><th>Action</th></tr>";
        foreach ($data as $key =>$row){
            list($id,$name,$price,$offerPrice)= explode(",",$row);
            $html.= "<tr><td>{$id}</td><td>{$name}</td><td>{$price}</td><td>{$offerPrice}</td><td><button><a href='index.php?EditId={$id}'>Edit</a></button> <button> <a href='index.php?id={$id}'>Delete</a></button></td></tr>";
        }
        $html.="</table>";
         return $html;
    }
    public static function delete($_id){
        $data = file("productdata.txt",FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
        $product="";
        foreach($data as $key=>$value){
            list($id, $name, $price, $offerPrice)=explode(",",$value);
            if($id!=$_id){
                $product.=$value . PHP_EOL;
            }
        }
        file_put_contents("productdata.txt", trim($product));
        return true;
    }

    public function update(){

        $data=file("productdata.txt",FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
        $product="";
        foreach ($data as $key => $value){
            list($id, $name, $price, $offerPrice)= explode(",",$value);
            if($this->id==$id){
                $product .= $this->id.",".$this->name.",".$this->price.",".$this->offerPrice . PHP_EOL;
            }else{
                $product .= $value . PHP_EOL;
            }
        }
        file_put_contents("productdata.txt",trim($product));
        return true;
    }

    public static function search ($_id){
        $data=file("productdata.txt");
        $product=null;
        foreach ($data as $key => $value) {
            list($id,$name,$price,$offerPrice) = explode(",",$value);
            if($id==$_id){
                $product =["id"=>$id,"name"=>$name, "price"=>$price, "offerPrice"=>$offerPrice];
                break;
            }
        }

        return $product;
    }

    public function __toString()
    {
        return"$this->id | $this->name | $this->price | $this->offerPrice";
    }
}

?>