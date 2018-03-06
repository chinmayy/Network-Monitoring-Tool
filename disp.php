<?php
shell_exec('capture.sh');
$radioVal = $_POST["myradio"];
$dropval= $_POST["choose"];
if($radioVal == "udp")
{
if($dropval == "time")
{
$file = fopen("udp_time","r");
while(! feof($file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "smac")
{
$file = fopen("udp_smac","r");
while(! feof($file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "dmac")
{
$file = fopen("udp_dmac","r");
25
while(! feof($file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "length")
{
$file = fopen("udp_length","r");
while(! feof($file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "sip")
{
$file = fopen("udp_sip","r");
while(! feof($file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "sp")
{
$file = fopen("udp_sp","r");
while(! feof(file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "dip")
26
{
$file = fopen("udp_dip","r");
while(! feof(file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "dp")
{
$file = fopen("udp_dp","r");
while(! feof(file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
}
else if($radioVal == "ip")
{
if($dropval == "time")
{
$file = fopen("ip4_time","r");
while(! feof(file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "smac")
{
$file = fopen("ip4_smac","r");
while(! feof(file))
27
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "dmac")
{
$file = fopen("ip4_dmac","r");
while(! feof(file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "length")
{
$file = fopen("ip4_length","r");
while(! feof(file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "sip")
{
$file = fopen("ip4_sip","r");
while(! feof(file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "sp")
{
28
$file = fopen("ip4_sp","r");
while(! feof(file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "dip")
{
$file = fopen("ip4_dip","r");
while(! feof(file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "dp")
{
$file = fopen("ip4_dp","r");
while(! feof(file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
}
else if($radioVal == "arp")
{
if($dropval == "time")
{
$file = fopen("arp_time","r");
while(! feof(file))
{
echo fgets($file). "<br />";
29
}
fclose($file);
}
else if($dropval == "smac")
{
$file = fopen("arp_smac","r");
while(! feof(file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "dmac")
{
$file = fopen("arp_dmac","r");
while(! feof(file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "length")
{
$file = fopen("arp_length","r");
while(! feof(file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "sip")
{
$file = fopen("arp_sip","r");
while(! feof(file))
30
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "sp")
{
echo("no port no");
}
else if($dropval == "dip")
{
$file = fopen("arp_dip","r");
while(! feof(file))
{
echo fgets($file). "<br />";
}
fclose($file);
}
else if($dropval == "dp")
{
echo("no port np");
}
}
?>