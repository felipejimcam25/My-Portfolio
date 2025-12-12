<?php
echo 'HOLAAA';
session_start();

require_once __DIR__ . '/../includes/functions.php';

$message = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $user_pass = $_POST['user_pass'];

    if(!$username || !$user_pass ) {
        $message = 'Debes rellenar todos los campos';
    } else {
        $res = adminLogin($username, $user_pass);

        if($res['message']) {
            $message = $res['message'];
        } else {
            $message = $res['message'];
        }
    }


}
?>