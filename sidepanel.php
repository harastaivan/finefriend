<!--DRUHY SLOUPEC-->
    <div class='w3-col l5 w3-padding-xxlarge w3-hide-medium w3-hide-small'>
        <!--PROFIL-->
        <div class='padding-medium left-thick-border border-black gradient margin-top-large w3-<?php echo $_SESSION['user']->color; ?>'>
            <div class='w3-row'>
                <div class='w3-col' style='width:100px'>
                    <div class='avatar' style='background-image:url("<?php echo $_SESSION['user']->image; ?>")'></div>
                </div>
                <div class='w3-rest padding-horizontal-medium'>
                    <div>
                        <?php
                        echo "<h3><a href='?profile=" . $_SESSION['user']->id . "'>" . $_SESSION['user']->fullname . "</a></h3>";
                        ?>
                        <a href='#'>Nastavení účtu</a> | 
                        <a href='#'>LUL</a> | 
                        <a href='#'>ZULUL</a> | 
                        <a href='#'>PETALUL</a> | 
                        <a href='?logout=1'>Odhlásit se</a>

                    </div>
                </div>
            </div>
        </div>
        <?php 
        echo "<div class='left-thick-border border-darker-gray'>";
        include("messages.php"); 
        echo "</div>";
        echo "<div class='left-thick-border border-dark-gray'>";
        include("follow.php");
        echo "</div>";
        ?>
        
        <!--NAJIT PRATELE-->
        
    </div>
</div>