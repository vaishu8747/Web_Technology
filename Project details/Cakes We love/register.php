<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="web_tech";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection 
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
$name=$_POST['Username'];
$phone=$_POST['ph'];
$address=$_POST['Address'];
$email=$_POST['Email'];
$password=$_POST['Password'];

$sql_query = "INSERT INTO personal_info (Username,ph,Address,Email,Password)
VALUES ('$name','$phone','$address','$email','$password')";

if(mysqli_query($conn, $sql_query))
{
    echo "New Details Entery inserted Successfully !";
}
else
{
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);

}
?>