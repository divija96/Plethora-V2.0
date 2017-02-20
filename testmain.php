 <?php
# exec ( "usr/bin/python testmain.py ",$recoresult);
#echo "<script> alert('$recoresult'); </script>";
#echo $recoresult;
#echo impode("\n", $recoresult); 
#$recoresultarray=json_decode($recoresult,true);
#$elementCount  = count($recoresultarray);
#echo "<script> alert('$elementCount'); </script>";
#foreach ($recoresultarray as $row){
#	echo $row[0];
#}
$command=escapeshellcmd('python testmain.py /tmp');
$output=shell_exec($command);
echo $output;
?>
