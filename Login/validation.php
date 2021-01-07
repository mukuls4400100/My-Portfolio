<?php 
include('config.php');
$em=$_POST['username'];
$pass=$_POST['password'];
// $q="Select * from SouravData (Email,Password) values($em','$pass');";
$q="select * from SouravData where Email='$em' and Password='$pass'";
//echo $q;
$query=mysqli_query($conn,$q) or die(mysqli_error($conn));
// $num=mysqli_fetch_array($query);
 // if(mysqli_affected_rows($conn)>0){
if (mysqli_num_rows($query)>0) {
	$row=mysqli_fetch_array($query);
	# code...
	// echo "<script>alert('Registered Sucessfully')</script>";
    header("location:index.php");
}
else
{
	 echo "<script>alert('Error')</script>";

}

?>