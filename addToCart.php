
<?php
session_start();
$con = mysqli_connect("localhost","root","mukta3396","plethora");
// Check connection
if (mysqli_connect_errno())
{

echo "<script> window.history.go(-1); </script>";
}
$sql = "INSERT INTO tempCart (titem_id,rating,quantity) VALUES ('$_POST[titem_id]','$_POST[rating]','$_POST[quantity]')";
if (!mysqli_query($con,$sql))
{

echo "<script> window.history.go(-1); </script>";
}
mysqli_close($con);

echo "<script> window.history.go(-1); </script>";
?>

