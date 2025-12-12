<?php 

require_once __DIR__ . '/db.php';

//ADMIN LOGIN MANAGE FUNCTION
function adminLogin($username, $user_pass) {
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM admins WHERE username = ?');
    $stmt->execute([ $username ]);
    $user = $stmt->fetch();

    if(!$user) {
        return ['success' => 'false', 'message' => 'This user does not exists'  ];
    }
    
    if($user['user_pass'] !== $user_pass) {
        return ['success' => 'false', 'message' => 'Incorrect username or password '];
    }
    
    session_regenerate_id(true);
    $_SESSION['id'] = $user['id'];
    $_SESSION['user'] = $username;
    
    header('Location: adminDashboard.php');
    return ['success' => 'true', 'message' => 'Session Started'];

}

//MANAGE SESSION PERMISSIONS TO ACCESS THE ADMIN PATH FUNCTION
function requireLogin() {
    if(!isset($_SESSION['id'])) {
        $_SESSION = [];
        header('Location: login.php');
        exit;
    }
}

?>