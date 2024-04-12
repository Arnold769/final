<?php
if (!isset($_SESSION)) {
    session_start();
}


function loginCheck()
{
    if (!$_SESSION['user_id']) {
        header("location: ../login/login.php");
    } else {
        echo 'not logged in';
        die();
    }
}
