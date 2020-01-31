<?php
    include_once("./lib/gestion_session.php");
    include_once("./lib/bdd_config.php");
?>

<!DOCTYPE html>
<html>
	<link href="./ressources/design/design.css" rel="stylesheet" media="all" type="text/css">
	<link rel="icon" href="./Ressources/images/favicon.ico" type="image/x-icon"/>
    <head>
        <?php
            include_once("./lib/google_analytics.php");
            $nom_page='Equipes';
            $description_page='Voyez sur cette page tous les équipages pour l\'événement !';
            include_once("./elements/meta.php");
        ?>
        <meta charset="UTF-8">
	</head>
	<body>
        <?php include_once("./elements/header.php"); ?>
        <?php 
        
        for ($i = 1; $i <= 8; $i++) {
            
        echo"
        <div class='equipe p40p'>
            <h1 class='equipe_name'>Nom_equipe</h1>
            <img class='equipe_img' src='https://www.asaca.net/documents/archives/images_sections/Karting.jpeg' alt='Image de l equipe NOM_EQUIPE'/>
            <p>Description equipe</p>
            <div class='spe'>
                <div class='note'>
                    <i class='icone icon-eye icone_margin'>&#xe826;</i>Esthétique :
                    <i class='icone icon-ico-star'>&#xe817;</i>
                    <i class='icone icon-ico-star'>&#xe817;</i>
                    <i class='icone icon-ico-star'>&#xe817;</i>
                    <i class='icone icon-ico-star-half-alt'>&#xf123;</i>
                    <i class='icone icon-ico-star-empty'>&#xe818;</i>
                </div>
                <div class='cote'><i class='icone icon-chart-line icone_margin'>&#xf201;</i>Cote : 1.03</div>
            </div>
            <div class='pilotes'><i class='icone icon-users-2 icone_margin'>&#xe8be;</i>Les pilotes :</div>

            <table class='equipage'>
                <tr class='pilote'>
                    <table class='badge'>
                        <tr>
                            <td class='left'>  
                                <div class='image-cropper'><img class='pilote_img' src='https://www.asaca.net/documents/archives/images_sections/Karting.jpeg' alt='Image du piote NOM_PILOTE'/></div>
                            </td>
                            <td class='right'>
                                <img class='flag' src='./ressources/images/flags-normal/fr.png' alt='nationalite pilote'/><h1 class='pilote_name'>Nom_pilote</h1>
                                <p>Description pilote, voici par exemple une description assez longue où je pare de ma vie pour rien dire en fin de compte...<p>
                            </td>
                        </tr>
                    </table>
                </tr>
                <tr class='pilote'>
                    <table class='badge'>
                        <tr>
                            <td class='left'>  
                                <div class='image-cropper'><img class='pilote_img' src='https://www.asaca.net/documents/archives/images_sections/Karting.jpeg' alt='Image du piote NOM_PILOTE'/></div>
                            </td>
                            <td class='right'>
                                <img class='flag' src='./ressources/images/flags-normal/fr.png' alt='nationalite pilote'/><h1 class='pilote_name'>Nom_pilote</h1>
                                <p>Description pilote, voici par exemple une description assez longue où je pare de ma vie pour rien dire en fin de compte...<p>
                            </td>
                        </tr>
                    </table>
                </tr>
                <tr class='pilote'>
                    <table class='badge'>
                        <tr>
                            <td class='left'>  
                                <div class='image-cropper'><img class='pilote_img' src='https://www.asaca.net/documents/archives/images_sections/Karting.jpeg' alt='Image du piote NOM_PILOTE'/></div>
                            </td>
                            <td class='right'>
                                <img class='flag' src='./ressources/images/flags-normal/fr.png' alt='nationalite pilote'/><h1 class='pilote_name'>Nom_pilote</h1>
                                <p>Description pilote, voici par exemple une description assez longue où je pare de ma vie pour rien dire en fin de compte...<p>
                            </td>
                        </tr>
                    </table>
                </tr>
            </table>
        </div>";
        }
        ?>
        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>