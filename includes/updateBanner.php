<?php

//THIS FILE UPDATES THE BANNER TEXTS AND IMAGE

session_start();

require_once __DIR__ . "/../includes/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $banner_h1 = $_POST["banner_h1"];
    $banner_h1_span = $_POST["banner_h1_span"];
    $banner_upper_text = $_POST["banner_upper_text"];
    $banner_below_text = $_POST["banner_below_text"];

    
    $imageName = null;

    if (!empty($_FILES["banner_image"]["name"])) {

        $imageName = time() . "_" . basename($_FILES["banner_image"]["name"]);
        $targetPath = "../imgFile/" . $imageName;

        if (!move_uploaded_file($_FILES["banner_image"]["tmp_name"], $targetPath)) {
            die("Error uploading image");
        }

    } else {
        
        $imageName = $_POST["current_image"];
    }

    try {
        $query = $pdo->prepare("UPDATE banner SET  banner_h1 = ?, banner_h1_span = ?, banner_upper_text = ?, banner_below_text = ?, banner_image = ? WHERE id = 1");

        $query->execute([
            $banner_h1,
            $banner_h1_span,
            $banner_upper_text,
            $banner_below_text,
            $imageName
        ]);

        echo "Banner updated successfully";

    } catch (PDOException $e) {
        echo "DB Error: " . $e->getMessage();
    }
    header('Location: ../public/adminDashboard.php');
}
?>