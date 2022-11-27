<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix<?php 
        if(isset($_POST['page'])){
            echo " - ".ucfirst($_POST['page']);
        }
    ?></title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/footer.css">
</head>
<body>
    <?php include_once("./components/header.php"); ?>
    <main>
        <?php
            if (isset($_POST['page'])) {
                $page = $_POST['page'];
                include_once("./pages/$page.php");
            } else {
                include_once("./pages/default.php");
            }
        ?>
    </main>
    <?php include_once("./components/footer.php"); ?>
</body>
</html>