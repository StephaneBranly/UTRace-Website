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
            $query = mysqli_query($connect,"SELECT * FROM vars WHERE `var`='finished'");
            $row = mysqli_fetch_array($query);
            if($row['value'])
            echo "<div class='alert green_alert'>
            <p>Course terminée</p>
            </div>";
            else
            echo "<div class='alert red_alert'>
            <p>Course non déclarée comme terminée</p>
            </div>";

            $query = mysqli_query($connect, "SELECT * FROM ticket WHERE validated=1");
            while($row = mysqli_fetch_array($query))
            {
                $query_first = mysqli_query($connect, "SELECT * FROM team WHERE `id`=$row[first]");
                $row_first = mysqli_fetch_array($query_first);
                $position_first=$row_first['place'];

                $query_second = mysqli_query($connect, "SELECT * FROM team WHERE `id`=$row[second]");
                $row_second = mysqli_fetch_array($query_second);
                $position_second=$row_second['place'];

                $query_third = mysqli_query($connect, "SELECT * FROM team WHERE `id`=$row[third]");
                $row_third = mysqli_fetch_array($query_third);
                $position_third=$row_third['place'];
                $error = 3.*abs(1.-$position_first) + 2.*abs(2.-$position_second) + 1.*abs(3.-$position_third);
                
                $query_third = mysqli_query($connect, "UPDATE `ticket` SET `error`=$error WHERE `id`=$row[id]");

                // 3*|1-position_arrivée(premier)| + 2*|2-position_arrivée(deuxieme)| + 1*|3-position_arrivée(troisieme)| 
            }
         
            $query = mysqli_query($connect,"SELECT * FROM ticket WHERE `validated`=1 ORDER BY `error` ASC");
            $index=1;
            while($row = mysqli_fetch_array($query))
            {
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
                                            <p>error=$row[error]</p>
                                            <p>classement=$index</p>
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
                    $index++;
            }
        }
            ?>
        <div class="bar"></div>
        
    </div>
    </body>

    </html>
