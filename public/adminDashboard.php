<?php
session_start();

require_once __DIR__ . "/../includes/db.php";
require_once __DIR__ . "/../includes/functions.php";

requireLogin();


$query = $pdo->query("SELECT * FROM banner WHERE id = 1");
$banner = $query->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <header>
        <nav>
            <ul class="navList">
                <li><a href="../includes/logOut.php">Log Out</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="adminContainer">
            <article class="adminContent">

                <form action="../includes/updateBanner.php" method="POST" enctype="multipart/form-data" class="adminForm">
                    
                    <div class="formControl">
                        <label for="h1">Banner H1:</label>
                        <input type="text" id="h1" name="banner_h1" value="<?= $banner['banner_h1'] ?>" required>
                    </div>
                    <div class="formControl">
                        <label for="h1">Banner H1 Span:</label>
                        <input type="text" id="h1" name="banner_h1_span" value="<?= $banner['banner_h1_span'] ?>" required>
                    </div>

                    <div class="formControl">
                        <label for="banner_upper_text">Banner top Text:</label>
                        <input type="text" id="banner_upper_text" name="banner_upper_text" value="<?= $banner['banner_upper_text'] ?>" required>
                    </div>

                    <div class="formControl">
                        <label for="banner_below_text">Banner bottom Text:</label>
                        <input type="text" id="banner_below_text" name="banner_below_text" value="<?= $banner['banner_below_text'] ?>" required>
                    </div>

                    <div class="formControl">
                        <label for="banner_image">Banner Image:</label>
                        <input type="file" id="banner_image" name="banner_image">
                    </div>

                    <div class="currentImage">
                        <span>Current Image:</span>
                        <input type="hidden" name="current_image" value="<?= $banner['banner_image'] ?>">
                        <img src="../imgFile/<?= $banner['banner_image'] ?>" width="120px">
                    </div>

                    <button type="submit">Update</button>
                </form>

            </article>
        </section>
    </main>
</body>
</html>