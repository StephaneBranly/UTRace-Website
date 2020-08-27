<!DOCTYPE html>
<html>
	<link href="./ressources/design/design.css" rel="stylesheet" media="all" type="text/css">
	<link rel="icon" href="./ressources/images/favicon.ico" type="image/x-icon"/>
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
        <?php 
        include_once("./elements/header.php");?>
        
        <?php
        include_once("./admin/inc/sqlConnect.php"); 
        $query = mysqli_query($connect,"SELECT * FROM team");
        while($row = mysqli_fetch_array($query)){
            $query2 = mysqli_query($connect,"SELECT AVG(vote.value) FROM vote,voter WHERE voter.id=vote.idVoter AND vote.idTeam=$row[0] AND voter.active=true");
            $result = mysqli_fetch_array($query2);
            $arrondi = round($result[0] * 2) / 2;
            echo"
        <div class='equipe p40p'>
            <h1 class='equipe_name'>$row[1]</h1>
            <img class='equipe_img' src='ressources/team/team$row[0].png' alt='Image de l equipe $row[1]'/>
            <p>$row[2]</p>
            <div class='spe'>
                <div class='note'>
                <i class='icone icon-eye icone_margin'>&#xe826;</i>Esthétique :";
                for($i=0;$i<5;$i++){
                    if($arrondi>0){

                        if($arrondi>=1){
                            echo "<i class='icone icon-ico-star'>&#xe817;</i>";
                        }else{
                            echo "<i class='icone icon-ico-star-half-alt'>&#xf123;</i>";
                        }
                        $arrondi--;
                    }else{
                        echo"<i class='icone icon-ico-star-empty'>&#xe818;</i>";
                    }
                }
                    
                echo"</div>
                <div class='cote'><i class='icone icon-chart-line icone_margin'>&#xf201;</i>Cote : 1.03</div>
            </div>
            <div class='pilotes'><i class='icone icon-users-2 icone_margin'>&#xe8be;</i>Les pilotes :</div><br/>

            <table class='equipage'>
                <tr class='pilote'>
                    <table class='badge'>
                        <tr>
                            <td class='left'>  
                                <div class='image-cropper'><img class='pilote_img' src='ressources/team/pilot1_$row[0].png' alt='Image du piote $row[3]'/></div>
                            </td>
                            <td class='right'>
                                <img class='flag' src='./ressources/images/flags-normal/fr.png' alt='nationalite pilote'/><h1 class='pilote_name'>$row[3]</h1>
                                <p>$row[4]<p>
                            </td>
                        </tr>
                    </table>
                </tr>
                <tr class='pilote'>
                    <table class='badge'>
                        <tr>
                            <td class='left'>  
                                <div class='image-cropper'><img class='pilote_img' src='ressources/team/pilot2_$row[0].png' alt='Image du piote $row[5]'/></div>
                            </td>
                            <td class='right'>
                                <img class='flag' src='./ressources/images/flags-normal/fr.png' alt='nationalite pilote'/><h1 class='pilote_name'>$row[5]</h1>
                                <p>$row[6]<p>
                            </td>
                        </tr>
                    </table>
                </tr>
                <tr class='pilote'>
                    <table class='badge'>
                        <tr>
                            <td class='left'>  
                                <div class='image-cropper'><img class='pilote_img' src='ressources/team/pilot3_$row[0].png' alt='Image du piote $row[7]'/></div>
                            </td>
                            <td class='right'>
                                <img class='flag' src='./ressources/images/flags-normal/fr.png' alt='nationalite pilote'/><h1 class='pilote_name'>$row[7]</h1>
                                <p>$row[8]<p>
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