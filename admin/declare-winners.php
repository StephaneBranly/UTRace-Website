<?php
session_start();
if (!isset($_SESSION["connect"])) {
    header("Location : index.php");
} else {
    include("inc/header.php");
    include("inc/sqlConnect.php");
    ?>
    <div class="container form">
        <h1>Mettre à jour le classement :</h1>
        <?php 
        if (isset($_POST["submit"])) {
            $query = mysqli_query($connect,"SELECT * FROM `team` ORDER BY `id` ASC");
            while($row = mysqli_fetch_array($query))
            {
                $name_input="team$row[id]";
                $place=$_POST[$name_input];
                $query1 = mysqli_query($connect,"UPDATE `team` SET `place`=$place WHERE `id`=$row[id]");
            }
               
            echo "<div class='green_alert alert'>
                <p>Classement mis à jour</p>
            </div>";
            if(isset($_POST["finished"]))
            {
                $query2 = mysqli_query($connect,"UPDATE `vars` SET `value`=1 WHERE `var`='finished'");
            echo "
            <div class='yellow_alert alert'>
                <p>Course déclarée comme terminée !</p>
            </div>";
            }
            else
            $query2 = mysqli_query($connect,"UPDATE `vars` SET `value`=0 WHERE `var`='finished'");
         
        }
            ?>
        <div class="bar"></div>
        <form method="post" action="declare-winners.php">
            <table>
                <tr><td><b>Equipe</b></td><td><b>ID equipe</b></td><td><b>Place</b></td></tr>
            <?php 
                $query = mysqli_query($connect,"SELECT * FROM team ORDER BY `id` ASC");
                while($row = mysqli_fetch_array($query))
                {
                    echo "<tr><td>$row[name]</td><td>$row[id]</td><td><input name='team$row[id]' type='number' min='1' value='$row[place]'/></td></tr>";
                }
            ?>
            </table>
            <div class='bar'></div>
            <table>
                <tr>
                    <td><label for="finished">Course terminée ? :</label></td>
                    <?php
                        $query = mysqli_query($connect,"SELECT * FROM vars WHERE `var`='finished'");
                        $row = mysqli_fetch_array($query);
                        if($row['value'])
                            $check="checked";
                        else
                            $check="";
                    
                    echo "<td><input type='checkbox' $check name='finished'/></td>";
                    ?>
                </tr>
            </table>
            <input type="submit" name="submit" value="Mettre à jour">
        </form>
    </div>
    </body>

    </html>
<?php } ?>