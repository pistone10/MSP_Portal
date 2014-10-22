<?php
require_once(dirname(__FILE__) . '../lib/adLDAP.php');
$username = "Enterprise";
$password = "CaptainJack21!";
try {
    $adldap = new adLDAP();
	$authUser = $adldap->user()->authenticate($username, $password);
	if ($authUser == true) {
	  echo "User authenticated successfully";
	}
	else {
	  // getLastError is not needed, but may be helpful for finding out why:
	  echo $adldap->getLastError();
	 
	  echo "User authentication unsuccessful";
	}
}
catch (adLDAPException $e) {
    echo $e; 
	exit();
}

?>