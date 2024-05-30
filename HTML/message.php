<?php
    $HOSTNAME1 = 'localhost';
    $USERNAME1 = 'root';
    $PASSWORD1 = '';
    $DATABASE1 = 'signupforms';
    $PORT1 = '3307';

    // $HOSTNAME2 = 'localhost';
    // $USERNAME2 = 'root';
    // $PASSWORD2 = '';
    // $DATABASE2 = 'passwordmanager';
    // $PORT2 = '3307';

    $cons = mysqli_connect($HOSTNAME1, $USERNAME1, $PASSWORD1, $DATABASE1, $PORT1);
    // $cons2 = mysqli_connect($HOSTNAME2, $USERNAME2, $PASSWORD2, $DATABASE2, $PORT2);

    if(!$cons){
        die(mysqli_connect_error($cons));
    }

    // if(!$cons2){
    //     die(mysqli_connect_error($cons2));
    // }
?>