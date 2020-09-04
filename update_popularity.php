<?php
    function update_popularity()
    {
        global $connect;
        
        $tab_count = array();

        $query_nbr_tickets = mysqli_query($connect, "SELECT COUNT(*) FROM ticket WHERE validated=1");
        $row_nbr_tickets = mysqli_fetch_array($query_nbr_tickets);
        $nbr_tickets =  $row_nbr_tickets[0];

        $query_nbr_teams = mysqli_query($connect, "SELECT  * FROM team");
        while($row = mysqli_fetch_array($query_nbr_teams))
            $tab_count[$row['id']]=0;
    
        $query_tickets = mysqli_query($connect, "SELECT * FROM ticket WHERE validated=1");
        while($row = mysqli_fetch_array($query_tickets))
        {
            $tab_count[$row['first']]+=3;
            $tab_count[$row['second']]+=2;
            $tab_count[$row['third']]+=1;
        }    
        $query_teams = mysqli_query($connect, "SELECT * FROM team");
        while($row = mysqli_fetch_array($query_teams))
        {
            $popularity =  $tab_count[$row['id']]/(3*$nbr_tickets);
            $query1 = mysqli_query($connect,"UPDATE `team` SET `popularity`=$popularity WHERE `id`=$row[id]");
        }
    }

?>