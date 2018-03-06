<form method="POST" action="choice.php">
<input type="radio" name ="myradio" value="udp"> UDP<br>
<input type="radio" name ="myradio" value="ip"> IP<br>
<input type="radio" name ="myradio" value="arp" > ARP
<input type="submit" value="choice" name="choice" >
<select name ="choose">
<option value="time">time stamp</option>
<option value="smac">source mac address</option>
<option value="dmac">destination mac address</option>
<option value="length">length</option>
<option value="sip">source ip address</option>
<option value="sp">Source port address</option>
<option value="dip">destination ip address</option>
<option value="dp">destination port address</option>
24
</select>
</form>