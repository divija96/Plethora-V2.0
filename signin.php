
<?php
session_start();
$con = mysqli_connect("localhost","root","mukta3396","plethora");
// Check connection
$_SESSION['UserName']="";
if (mysqli_connect_errno())
{
echo "<script> window.history.go(-1); </script>";
}
$_SESSION['UserNameError'] = "";
$_SESSION['PasswordError'] = "";
$_SESSION['UserName'] = "";
$_SESSION['UserId'] = -1;
$_SESSION['Success'] = "";
$check="SELECT * FROM Login WHERE uname='$_POST[uname]' and password='$_POST[password]'";
$result4=mysqli_query($con,$check);
$row=mysqli_fetch_array($result4,MYSQL_NUM);
		 $rowcount=mysqli_num_rows($result4);
		 if($rowcount >0)
		 {
  		 $_SESSION['UserName']=$_POST[uname];
		 $_SESSION['UserId'] = $row[0];
		 echo "<script> window.history.go(-2); </script>";
		 }
else{
$_SESSION['Success'] = "Username does not exist or Password is Wrong!";
mysqli_close($con);
echo "<script> window.history.go(-1); </script>";
}
?>
