<?php
session_start();
if (!isset($_SESSION["connect"])) {
    header("Location : index.php");
} else {
    include("inc/header.php");
    include("inc/sqlConnect.php");
    
    echo"<div class='container form'>
        <h1>Mettre à jour les liens du Header :</h1>";
        
            $links=array('equipes','vote','tierce','evenement','association','sponsors','live');
            if (isset($_POST["submit"])) {
                foreach($links as $link)
                {
                    if(isset($_POST[$link]))
                        $value=1;
                    else
                        $value=0;
                    $query = mysqli_query($connect,"UPDATE vars SET `value`=$value WHERE `var`='$link'");
                }
                echo "<div class='alert green_alert'>
                <p>Liens mis à jour</p>
                </div>";
            }
         
        
        echo "<div class='bar'></div>
        <form method='post' action='update-links.php'>
            <table>";
                
                    foreach($links as $link)
                    {
                        $query = mysqli_query($connect,"SELECT * FROM vars WHERE `var`='$link'");
                        $row = mysqli_fetch_array($query);
                        if($row['value'])
                            $check="checked";
                        else
                            $check=""; 
                        echo "<tr><td><label>$link :</label></td><td><input type='checkbox' $check name='$link'/></td></tr>";
                    }
                
            echo"</table>
            <input type='submit' name='submit' value='Mettre à jour'>
        </form>
    </div>
    </body>

    </html>";
} ?>