<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix<?php echo isset($_POST['page']) ? " - ".ucfirst($_POST['page']) : ""; ?></title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/contato.css">
</head>
<body>
    <?php include("./components/header.php"); ?>
    <main>
        <?php
            if (isset($_POST['page'])) {
                $page = $_POST['page'];
                include("./pages/$page.php");
            } else {
                include("./pages/default.php");
            }
        ?>
    </main>
    <?php include("./components/footer.php"); ?>
</body>
</html>