<!DOCTYPE html>
<html>
	<link href="./ressources/design/design.css" rel="stylesheet" media="all" type="text/css">
	<link rel="icon" href="./ressources/images/favicon.ico" type="image/x-icon"/>
    <head>
        <?php
            include_once("./lib/google_analytics.php");
            $nom_page='Confirmation';
            $description_page='Confirmation de la notation';
            include_once("./elements/meta.php");
            include_once("./admin/inc/sqlConnect.php");
        ?>
        <meta charset="UTF-8">
	</head>
	<body>
        <?php include_once("./elements/header.php"); ?>
        
        <section>
            <div class='content_section'>
                <h1 class="section_name">Confirmation</h1>
                <?php 
                    if(isset($_GET["id"])&&isset($_GET["pass"])){
                        $id = (int) $_GET["id"];
                        $pass=addslashes($_GET["pass"]);
                        $query = mysqli_query($connect,"UPDATE voter set active=true WHERE id=$id AND pass='$pass'");
                        if($query){
                            echo "<p>Merci d'avoir confirmé vos notes !";
                        }else{
                            echo "<p>Erreur ! veuillez contacter un administrateur à l'adresse suivante : </p>";
                        }
                    }else{
                        echo "<p>Erreur ! veuillez contacter un administrateur à l'adresse suivante : </p>";
                    }
                ?>
            </div>
        </section>

        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>