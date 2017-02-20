
<?php
session_start();
$con = mysqli_connect("localhost","root","mukta3396","plethora");
// Check connection
if (mysqli_connect_errno())
{
echo "<script> alert('connect not working');</script>";
echo "<script> window.history.go(-1); </script>";
}
$sql = "DELETE FROM tempCart WHERE titem_id='$_POST[titem_id]'";
if (!mysqli_query($con,$sql))
{
echo "<script> alert('not working');</script>";
echo "<script> window.history.go(-1); </script>";
}
mysqli_close($con);
echo "<script> alert('working');</script>";
echo "<script> window.history.go(-1); </script>";
?>
