<?php
//THIS FILE IS TO LOG OUT THE SESSION

session_start();

$_SESSION = [];

session_destroy();

header('Location: ../public/login.php')


?>