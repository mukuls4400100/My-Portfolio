<?php 
session_start();
include('config.php');
$nm=$_POST['edtName'];
$em=$_POST['edtEmail'];
$pass=$_POST['edtPassword'];
$q="insert into SouravData (Name,Email,Password) values('$nm','$em','$pass');";
//echo $q;
$query=mysqli_query($conn,$q) or die(mysqli_error($conn));
if(mysqli_affected_rows($conn)>0){
	echo "<script>alert('Registered Sucessfully')</script>";
    header("location:login.php");
}
else
{
	echo "<script>alert('Error in Registering')</script>";

}

?>