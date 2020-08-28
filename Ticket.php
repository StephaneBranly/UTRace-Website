<!DOCTYPE html>
<html>
	<link href="./ressources/design/design.css" rel="stylesheet" media="all" type="text/css">
	<link rel="icon" href="./ressources/images/favicon.ico" type="image/x-icon"/>
    <head>
        <?php
            include_once("./lib/google_analytics.php");
            $nom_page='Ticket';
            $description_page='Affichage ici du ticket de tiercé généré';
            include_once("./elements/meta.php");
        ?>
        <meta charset="UTF-8">
	</head>
	<body>
        <?php include_once("./elements/header.php"); ?>

        <?php
            include_once("./admin/inc/sqlConnect.php"); 

            if(isset($_POST["submit"])){
                if(isset($_POST["mail"])&&$_POST["mail"]!=""&&
                isset($_POST["name"])&&$_POST["name"]!=""&&
                isset($_POST["surname"])&&$_POST["surname"]!=""&&
                isset($_POST["phone"])&&$_POST["phone"]!=""&&
                isset($_POST["first"])&&
                isset($_POST["second"])&&
                isset($_POST["third"])){
                    $name = addslashes($_POST["name"]);
                    $surname = addslashes($_POST["surname"]);
                    $mail = addslashes($_POST["mail"]);
                    $phone = addslashes($_POST["phone"]);
                    $first = intval($_POST["first"]);
                    $second = intval($_POST["second"]);
                    $third = intval($_POST["third"]);
                    $now = date('Y-m-d H:i:s');
                    $query = mysqli_query($connect,"
                    INSERT INTO `utrace`.`ticket` (
                        `id` ,
                        `creation_date` ,
                        `mail` ,
                        `name` ,
                        `surname` ,
                        `phone` ,
                        `first` ,
                        `second` ,
                        `third` ,
                        `validated`
                        )
                        VALUES (
                        NULL , '$now' , '$mail', '$name', '$surname', '$phone', '$first', '$second', '$third', '0'
                        );
                    ");
                    $id=mysqli_insert_id($connect);

                    $query = mysqli_query($connect,"SELECT `name` FROM team WHERE `id`=$first");
                    $first_name = mysqli_fetch_array($query);
                    $query = mysqli_query($connect,"SELECT `name` FROM team WHERE `id`=$second");
                    $second_name = mysqli_fetch_array($query);
                    $query = mysqli_query($connect,"SELECT `name` FROM team WHERE `id`=$third");
                    $third_name = mysqli_fetch_array($query);
                    echo "<section>
                            <div class='content_section'>
                                <h1 class='section_name'>Ticket tiercé généré</h1> 
                                <p>Ton ticket a bien été généré, n'oublie pas de le valider au stand en échange d'1€ symbolique, retiens le numéro # de ton ticket tiercé !</p>
                                <div id='ticket_section'>
                                    <table cellspacing='0' cellpadding='0' id='ticket'>
                                        <tr>
                                            <td class='left' id='ticket_number'>
                                                Ticket #$id
                                            </td>
                                            <td class='right' id='name'>
                                            $name $surname
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='left'>
                                                <p>Ticket à valider<br/>au stand</p>
                                            </td>
                                            <td class='right'>
                                                <p id='tel'>Téléphone : $phone</p>
                                                <p id='email'>Mail : $mail</p>
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
            }
        ?>
       
        
        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>