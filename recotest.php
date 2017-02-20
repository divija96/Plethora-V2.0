 <?php

session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'mukta3396';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
	die('Could not connect: ' . mysql_error());
}

$command=escapeshellcmd('python main.py');
$output=shell_exec($command);

$a=substr($output,0,-3);
$arr=explode('\'',$a);
$i=0;
foreach ($arr as $item => $value){
if($i%2!=0)
{
$val=substr($value,1);
echo $val;

$sql = "SELECT * from Item WHERE item_name='$val'";

mysql_select_db('plethora');
$retval = mysql_query( $sql, $conn );

if(! $retval ) {
	die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
echo $row['item_name']; 
}
}
$i=$i+1; 
}

mysql_close($conn);
?>
