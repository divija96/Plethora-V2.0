
<?php
session_start();
$con = mysqli_connect("localhost","root","mukta3396","plethora");
// Check connection

if (mysqli_connect_errno())
{
echo "<script> window.history.go(-1); </script>";
}

$address= $_POST[street] . ", " .  $_POST[city] . ", " . $_POST[state] . ", " . $_POST[zip] . ", " . $_POST[country] ;
$id=date("Y-m-d");
$sql1 = "INSERT INTO PlaceOrder (o_date, address)
VALUES
('$id','$address')";
mysqli_query($con,$sql1);

$sql2="SELECT o_id FROM PlaceOrder ORDER BY o_id DESC LIMIT 1";
$result1=mysqli_query($con,$sql2);
$row1=mysqli_fetch_array($result1,MYSQL_NUM);
$sql4="SELECT login_id FROM Login WHERE uname='$_POST[uname]'";
$result2=mysqli_query($con,$sql4);
$row2=mysqli_fetch_array($result2,MYSQL_NUM);
$user=$row2[0];
$order=$row1[0];
$sql3 = "INSERT INTO Buyer (buyer_id, order_id)
VALUES
('$user' , '$order')";
mysqli_query($con,$sql3);
$sql8="SELECT * FROM tempCart";
$result3=mysqli_query($con,$sql8);
$file="u.data";
$f=fopen($file,'a');
while($row3=mysqli_fetch_array($result3,MYSQL_NUM))
{
$item=$row3[0];
$rating=$row3[1];
$quantity=$row3[2];

$sql7= "INSERT INTO Cart (orderid, itemid,rating,quantity)
VALUES
('$order' , '$item', '$rating','$quantity' )";
mysqli_query($con,$sql7);
$x=$user."\t".$item."\t".$rating."\t"."9\n";
fwrite($f,$x);
echo "<script>alert('$x');</script>";

}
fclose($f);


mysqli_close($con);
echo "<script> window.history.go(-2); </script>";

?>
