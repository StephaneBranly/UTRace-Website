<header>
    <div id='logo'><img  src='./ressources/images/logo.png' alt='Logo UTRace'/></div>
    <nav>
        <ul>
            <?php 
                include("admin/inc/sqlConnect.php");

                function show($name)
                {
                    global $connect;
                    $query = mysqli_query($connect,"SELECT * FROM vars WHERE `var`='$name'");
                    $row = mysqli_fetch_array($query);
                    if($row['value'])
                    return 1;
                    return 0;
                }
                echo "<li><a href='accueil'><i class='icone icone-home'>&#xe82c;</i>Accueil</a></li> ";
                if(show('equipes')) echo "<li><a href='equipes'><i class='icone icon-users-2'>&#xe8be;</i>Les équipes</a></li> ";
                if(show('vote')) echo "<li><a href='vote'><i class='icone icon-users-2'>&#xe8be;</i>Noter</a></li> ";
                if(show('tierce')) echo "<li><a href='tierce'><i class='icone'>&#xe81d;</i>Parier</a></li> ";
                if(show('evenement')) echo "<li><a href='evenement'><i class='icone icon-award-1'>&#xe8b9;</i>L'événement</a></li> ";
                if(show('association')) echo "<li><a href='association'><i class='icone icon-vcard'>&#xe8b3;</i>L'association</a></li> ";
                if(show('sponsors')) echo "<li><a href='sponsors'><i class='icone icon-heart-1'>&#xe8a1;</i>Les sponsors</a></li> ";
                if(show('live')) echo "<li class='live'><a href='live' class='live'><i class='icone icon-eye live'>&#xe826;</i>LIVE VIDEO</a></li>";
            ?>
        </ul>
    </nav>
</header>