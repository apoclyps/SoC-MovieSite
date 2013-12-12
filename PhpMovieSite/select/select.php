<html>
<head>
    <title> Select </title>
    <link rel="stylesheet" type="text/css" href="../css/web.css" />
</head>

<?php include "../css/header.php"; //adds header to the page ?>

<div id="banner"> .</div>
    <div id="body_border">
        <div style="text-align: center;">

<?php
//connect to MYSQL
$connect = mysql_connect("localhost", "root", "") or
        die("check your server connection.");

//make sure we're using the right database
mysql_select_db("moviesite");

//Creating a query to search for movies by year that are greater than 1990
$query = "SELECT movie_name, movie_type " .
          "FROM movie " .
          "WHERE movie_year>1990 " .
          "ORDER BY movie_type ";

//Storing Query Results in $results variable
$results = mysql_query($query) or die(mysql_error());

//Outputting records
while ($row = mysql_fetch_array($results))
{
    extract($row);
    echo $movie_name;
    echo " - ";
    echo $movie_type;
    echo "<br>";
}

?>
          </div>
    </div>
<?php include "../css/footer.php";?>
</html>
