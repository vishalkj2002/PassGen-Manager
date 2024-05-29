<?php 
$HOSTNAME= 'localhost';
$USERNAME= 'root';
$PASSWORD= '';
$DATABaSE= 'signupforms';

$cons = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABaSE);

if(!$cons){
    die(mysqli_connect_error($cons));
}


?>