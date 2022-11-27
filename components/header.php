<?php 
    $pages = [
        "home",
        "contact",
        "about"
    ]
?>

<header>
    <form method="post">
        <?php 
            for($i = 0; $i < count($pages); $i++){
                $value = $pages[$i];
                echo '<input type="submit" name="page" value='.$value.'>';
            }
        ?>
    </form>
</header>