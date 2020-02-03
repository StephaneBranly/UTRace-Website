<?php
session_start();
if (!isset($_SESSION["connect"])) {
    header("Location : index.php");
} else {
    include("inc/header.php");
    include("inc/sqlConnect.php");
    ?>
    <div class="container form">
        <h1>Supprimer un sponsor</h1>
        <?php if (isset($_POST["submit"])) {

                $id = $_POST['id'];
                $query = mysqli_query($connect, "DELETE FROM sponso WHERE id=$id");
                unlink("../img/sponso/sponso$id.png") or die("Couldn't delete file");
                echo <<<END
            <div class="green_alert alert">
                <p>La tierlist a été Suprimé</p>
            </div>
END;
            }
            ?>
        <div class="bar"></div>
        <form method="post" action="del-sponso.php">
            <table>
                <tr>
                    <td><label for="sponso">Sponsor :</label></td>
                    <td><select name="id" id="sponso">
                            <?php
                                $query = mysqli_query($connect, "SELECT * FROM sponso");
                                while ($row = mysqli_fetch_array($query)) {
                                    echo "<option value='$row[0]'>$row[1]</option>";
                                }
                                ?>
                        </select></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Supprimer">
        </form>
    </div>
    </body>

    </html>
<?php } ?>