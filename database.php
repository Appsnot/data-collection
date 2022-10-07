<?php 
//connecting with database
$servername='localhost';
$username='root';
$password="";
$database="my_db";

$conn=mysqli_connect($servername,$username,$password,$database);
$databaseconfig = mysqli_select_db($conn,$database);

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];   
    $contact=$_POST['contact'];       
    $address=$_POST['address'];
 
$sql="insert into user(name,age,contact,address)
values('$name','$age','$contact','$address')";
if(mysqli_query($conn,$sql))
{
    echo  ('new record inserted');
    header("index.php");
}
else{
    echo"error:".mysqli_error($conn);
}
mysqli_close($conn);

}  
