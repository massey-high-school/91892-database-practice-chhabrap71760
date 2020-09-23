  <?php include("topbit.php");

    $name_dev = $_POST['dev_name'];

// In App Purchases...
if (isset($_POST['in_app'])) {
    $in_app = 0;    
}

else {
    $in_app = 1;
}

// Ratings
$rating_more_less = mysqli_real_escape_string($dbconnect),
$_POST['rate_more_less']);
$rating = mysqli_real_escape_string($dbconnect, $_POST['rating']);

if ($rating_more_less == "at least") {
    $rate_op = ">=";    
}

elseif($rating_more_less == "at most") {
    $rate_op = "<=";    
}

else {
    $rate_op = "<=";
    $rating = 0;
    
} // end rating if / elseif / else


$find_sql = "SELECT * FROM `L2_DB_Prac_Game_Details` 
JOIN `L2_DB_Prac_Genre` ON (`L2_DB_Prac_Genre`.`GenreID` = `L2_DB_Prac_Game_Details`.`GenreID`)
JOIN `L2_DB_Prac_Developer` ON (`L2_DB_Prac_Developer`.`ID` =
`L2_DB_Prac_Game_Details`.`ID`)
 WHERE `Name` LIKE '%$app_name%' 
 AND `DevName` LIKE '%$developer%'
 AND `Genre` LIKE '%$genre%'
 AND `Price` <= '$cost'
 AND (`In App` = $in_app OR `In App` = 0)

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