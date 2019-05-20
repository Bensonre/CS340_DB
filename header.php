<header class="masthead mb-4">
    <div class="inner">
        <nav class="nav nav-masthead text-center bg-dark text-white">
            <div class="col-4">
            <h3 class="masthead-brand">Sample Restraunt</h3>
            <div>
            <div class="col-4"> 
            <div>
            <div class="col-4">
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
            ?>
            <div>
        </nav>
    </div>
</header>