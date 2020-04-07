<?php

echo "That's page spesial for 'RMS GMO'. Please, does not use this web site if you do not use 'RMS GMO'. ";

#Bool value to run or to stop application process!
#if value = True --> application is working
#else if value = False or if "$BollsBool != True" --> application was stoped!
$BollsBool != True;

if ($BollsBool == True){
	$Message = "That's working";
}
else if ($BollsBool == False){
	$Message = "Paused";
}
else{
	$Message = "Fatal error";
}

?>

<h1><?php echo $Message;?></h1>