<?php

include_once "db.conf.php";
// public 
// private 
// protected

class employeeinformation{

public $id;
public $name;
public $address; 
public $age;
public $salary;

public function __construct($_name, $_address,$_age,$_salary,$_id= null)
{
$this->id =$_id;
$this->name =$_name;
$this->address =$_address;
$this->age =$_age;
$this->salary =$_salary;
 
}


public function save(){
 global $db;
 $save = $db->query("insert into employeeinformation (name,address,age,salary) values ('$this->name','$this->address','$this->age','$this->salary')");
 if($save){
    return "Data Saved Successfully";
 }else{
    return "Data Not Saved";
} 
}


public static function showemployeeinformation(){
    global $db;
    $data = $db->query("select * from employeeinformation");
    $html = "<table>";
    $html .= "<tr><th>ID</th><th>Name</th><th>Address</th><th>Age</th><th>Salary</th><th>Action</th></tr>";
    while($row = $data->fetch_object()){
        $html .= "<tr><td>$row->id</td><td>$row->name</td><td>$row->address</td><td>$row->age</td><td>$row->salary</td>
        <td><a href='index.php?EditId=$row->id'>Edit</a> | <a href='index.php?id=$row->id'>Delete</a></td></tr>";
    }
    $html .= "</table>";
    return $html;
}




public static function delete($_id){
    global $db;
    $delete = $db->query("delete from employeeinformation where id = $_id");
    if($delete){
        return "Data Deleted Successfully";
     }else{
        return "Data Not Deleted";
    }
  }


 public function update(){
    global $db;
    $update = $db->query("update employeeinformation set name='$this->name', address='$this->address', age='$this->age', salary='$this->salary' where id= $this->id");
    if($update){
        return "Data Updated Successfully";
     }else{
        return "Data Not Updated";
    }
  }


 public static function find($_id){
    global $db;
    $data = $db->query("select * from employeeinformation where id = $_id");
    $employee= $data->fetch_object();
    if($employee){
    return new employeeinformation($employee->name, $employee->address, $employee->age, $employee->salary, $employee->id);
    }else{
        return "No Data Found";
  }
    }

  public function __toString()
  {
    return "$this->id | $this->name| $this->address | $this->age | $this->salary";
  }


}






// $employeeinformation= new employeeinformation(5,"Rashed", "Gaibandha");
// $employeeinformation->save();
// $employeeinformation->update();
// echo $employeeinformation;
// employeeinformation::delete(1);

// print_r(employeeinformation::find(5));
// echo employeeinformation::showemployeeinformation();
?>

