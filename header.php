<header class="masthead mb-4">
    <div class="inner">
        <nav class="nav nav-masthead text-center bg-dark text-white row">
            <div class="col-4">
            <h3 class="masthead-brand">Sample Restaurant</h3>
            </div>
            <div class="col-4"> 
            </div>
                <?php
            $content = array(
                "Home" => "Home.php",
                "Menu" => "menu.php",
                "Reserve" => "Reserve.php",
                "Reviews" => "Reviews.php"
            );
            
            foreach ($content as $page => $location) {
                echo "<a href='$location' class='nav-item'>";
                if ($page == $currentpage) {
                    
                    echo "<span class='nav-link active text-white'>" . $page . "</span></a>";
                } else {
                    echo "<span class='nav-link text-muted'>" . $page . "</span></a>";
                }
            }

            if(!isset($_SESSION['login_user'])){
                    echo "<a href='SignIn.php' class='nav-item'>";

                    echo "<span class='nav-link active text-muted'>Login</span></a>";
		}

            else{
                    echo "<a class='nav-item'>";

                    echo "<span class='nav-link active text-muted'>Hello" . $_Sesion['login_user'] . "</span></a>";
		}
            ?>
        </nav>
    </div>
</header>
