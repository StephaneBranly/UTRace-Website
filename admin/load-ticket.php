<?php
session_start();
if (!isset($_SESSION["connect"])) {
    header("Location : index.php");
} else {
    include("inc/header.php");
    include("inc/sqlConnect.php");
    ?>
    <div class="container form">
        <h1>Charger un ticket</h1>
        <?php if (isset($_POST["submit"])) {

                $id = $_POST['id'];
                $query = mysqli_query($connect, "SELECT * FROM ticket WHERE id=$id");
                $row = mysqli_fetch_array($query);
                if($row!=null){
                echo "
            <div class='green_alert alert'>
                <p>Ticket chargé</p>
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
            }
            else
                echo "<div class='alert red_alert'>
                <p>Ticket introuvable</p>
              </div>";
        }
            ?>
        <div class="bar"></div>
        <form method="post" action="load-ticket.php">
            <table>
                <tr>
                    <td><label for="sponso">Ticket :</label></td>
                    <td><input type='text' name='id' required placeholder='id du ticket'/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Charger">
        </form>
    </div>
    </body>

    </html>
<?php } ?>