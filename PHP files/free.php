  <?php include("topbit.php");

$find_sql = "SELECT * FROM `L2_DB_Prac_Game_Details` 
JOIN `L2_DB_Prac_Genre` ON (`L2_DB_Prac_Genre`.`GenreID` = `L2_DB_Prac_Game_Details`.`GenreID`)
JOIN `L2_DB_Prac_Developer` ON (`L2_DB_Prac_Developer`.`ID` =
`L2_DB_Prac_Game_Details`.`ID`)
 WHERE `Price` = 0 AND `In App` = 0
";
    $find_query = mysqli_query($dbconnect, $find_sql);
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);

?>
            
        
        <div class="box main">
            <h2>Name / Developer Results</h2>
            
            <?php
            include ("results.php");
            ?>s
            
        </div> <!-- / main -->
        
 <?php include("bottombit.php") ?>