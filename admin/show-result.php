<?php
session_start();
if (!isset($_SESSION["connect"])) {
    header("Location : index.php");
} else {
    include("inc/header.php");
    include("inc/sqlConnect.php");
    ?>
    <div class="container form">
        <h1>Voir les gagnants du tiercé :</h1>
        <?php 
            $options_select = "";
            $nbr_team=0;
            $query = mysqli_query($connect,"SELECT * FROM team ORDER BY `id` ASC");
            while($row = mysqli_fetch_array($query))
            {
                $options_select .= "<option value='$row[id]'>$row[name]</option>";
                $nbr_team++;
            }

            $query = mysqli_query($connect, "SELECT * FROM ticket WHERE validated=1");
            while($row = mysqli_fetch_array($query))
            {
                $position
                $error = 3*1;
                // 3*|1-position_arrivée(premier)| + 2*|2-position_arrivée(deuxieme)| + 1*|3-position_arrivée(troisieme)| 
            }
                if($row!=null){
                echo "
            <div class='green_alert alert'>
                <p>Ticket chargé</p>
            </div>";
            if($row['validated']==1)
            echo "
            <div class='yellow_alert alert'>
                <p>Ticket déjà validé !</p>
            </div>";
            $query2 = mysqli_query($connect,"SELECT `name` FROM team WHERE `id`=$row[first]");
            $first_name = mysqli_fetch_array($query2);
            $query2 = mysqli_query($connect,"SELECT `name` FROM team WHERE `id`=$row[second]");
            $second_name = mysqli_fetch_array($query2);
            $query2 = mysqli_query($connect,"SELECT `name` FROM team WHERE `id`=$row[third]");
            $third_name = mysqli_fetch_array($query2);
            echo "<section>
                    <div class='content_section'>
                        <div id='ticket_section'>
                            <table cellspacing='0' cellpadding='0' id='ticket'>
                                <tr>
                                    <td class='left' id='ticket_number'>
                                        Ticket #$row[id]
                                    </td>
                                    <td class='right' id='name'>
                                    $row[name] $row[surname]
                                    </td>
                                </tr>
                                <tr>
                                    <td class='left'>
                                        <p>Ticket à valider<br/>au stand</p>
                                    </td>
                                    <td class='right'>
                                        <p id='tel'>Téléphone : $row[phone]</p>
                                        <p id='email'>Mail : $row[mail]</p>
                                        <p id='classement'>
                                            <b>1er - $first_name[0]</b><br/>
                                            2eme - $second_name[0]<br/>
                                            3eme - $third_name[0]
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </section>";
                echo "
                <form method='post' action='validate-ticket.php'>
                    <td><input type='hidden' value='$id' name='id' placeholder='id du ticket'/></td>
                    <input type='submit' name='submit' value='Valider ce ticket'>
                </form>";
            }
            else
                echo "<div class='alert red_alert'>
                <p>Ticket introuvable</p>
              </div>";
        }
            ?>
        <div class="bar"></div>
        
    </div>
    </body>

    </html>
<?php } ?>