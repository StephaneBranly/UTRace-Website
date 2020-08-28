<?php
session_start();
if (!isset($_SESSION["connect"])) {
    header("Location : index.php");
} else {
    include("inc/header.php");
    include("inc/sqlConnect.php");
    ?>
    <div class="container form">
        <h1>Validation du ticket</h1>
        <?php if (isset($_POST["submit"])) {

                $id = $_POST['id'];
                $query = mysqli_query($connect, "UPDATE `ticket` SET `validated`=1 WHERE id=$id");
              
                echo "
            <div class='green_alert alert'>
                <p>Ticket $id validé</p>
            </div>";
        }
            ?>
        <div class="bar"></div>
        <form method="post" action="load-ticket.php">
            <table>
                <tr>
                    <td><label for="sponso">Charger un autre ticket :</label></td>
                    <td><input type='text' name='id' required placeholder='id du ticket'/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Charger">
        </form>
    </div>
    </body>

    </html>
<?php } ?>