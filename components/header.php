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
                "contato",
                "sobre"
            ];

            for($i = 0; $i < count($pages); $i++){
                $value = $pages[$i];
                if(isset($_POST['page'])){
                    $page = $_POST['page'];

                    if($page == $pages[$i]){
                        $color = "#fc1f1f";
                    }else{
                        $color = "#fff";
                    }

                    echo '<input type="submit" name="page" style="color:'.$color.';" value='.$value.'>';
                }else{
                    echo '<input type="submit" name="page" value='.$value.'>';
                }
            }
        ?>
    </form>
</header>