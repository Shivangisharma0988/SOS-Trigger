<?php 
$x='dehradun';
$y='haridwar';
$z='https://www.mapquestapi.com/directions/v2/route?key=9i2AuAq52sloogdlJUWE5LrHhVcOL40G&from=%s&to=%s';
$xc=sprintf($z,$x,$y);
$q = file_get_contents($xc);
$w = array();
$wq=0;
$k=0;
for ($i = 0; $i < strlen($q); $i++){
$k=0;
    if(($i>7)&&($q[$i-8]==',' && $q[$i]=='i' && $q[$i+1]=='v' && $q[$i+2]=='e'))
{
$j=($i+6);
while($q[$j]!='.')
{
$k++;
$j++;
}
$w[$wq++] = substr($q,$i+6,$k);
}
}
$nm="";
for ($help = 0; $help < (count($w)-1); $help++)
{
$nm= $nm."\n".$w[$help];
}
echo $nm;

?>
<html>
<body>
<a href="send_sms.php?varname=<?php echo $nm ?>">send_sms.php</a>
</body>
</html>