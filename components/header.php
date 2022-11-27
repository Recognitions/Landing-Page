<header>
    <script>
        function reload(){
            window.location.href = "";
        }
    </script>
    <span onclick="reload()"></span>
    <form method="post">
        <?php 
            $pages = [
                "home",
                "contact",
                "about"
            ];

            for($i = 0; $i < count($pages); $i++){
                $value = $pages[$i];
                echo '<input type="submit" name="page" value='.$value.'>';
            }
        ?>
    </form>
</header>