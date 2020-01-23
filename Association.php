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
            $nom_page='Association';
            $description_page='Découvrez sur cette page l\'histoire et la manière dont est gérée notre association UT\'Race !';
            include_once("./elements/meta.php");
        ?>
        <meta charset="UTF-8">
	</head>
	<body>
        <?php include_once("./elements/header.php"); ?>
        
        <section>
            <h1 class="section_name">Welcome</h1>
            <p>Association créée en septembre 2019 !</p>
        </section>

        <section>
            <h1 class="section_name">Les membres</h1>
            <h2>Bureau restreint</h2>
            <div class='p30p'>
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
</div>
<div class='p30p'>
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
</div>
<div class='p30p'>
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
</div><div class='p30p'>
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
</div>
            <h2>Animation</h2><div class='p30p'>
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
</div><div class='p30p'>
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
</div>
            <h2>Logistique</h2><div class='p30p'>
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
</div><div class='p30p'>
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
</div><div class='p30p'>
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
</div>
            <h2>Communication</h2><div class='p30p'>
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
</div><div class='p30p'>
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
</div><div class='p30p'>
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
</div>
            <h2>Sécurité</h2><div class='p30p'>
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
</div><div class='p30p'>
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
</div>
<h2>Informatique</h2><div class='p30p'>
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
</div><div class='p30p'>
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
</div>

        </section>

        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>