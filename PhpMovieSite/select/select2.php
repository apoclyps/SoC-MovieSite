<html>
<head>
    <title> Select </title>
    <link rel="stylesheet" type="text/css" href="../css/web.css" />
</head>

<body>

<?php include "../css/header.php"; //adds header to the page ?>


<div id="banner"> .</div>
    <div id="body_border">
         <div style="text-align: center;">

<?php
//connect to MYSQL
$connect = mysql_connect("localhost","root", "") or
        die ("check your server connection");

// make sure we're using the right database
mysql_select_db("moviesite");

$query = "SELECT * " .
            "FROM movie " .
            "WHERE movie_year>1990 " .
            "ORDER BY movie_type ";

$results = mysql_query($query) or
        die(mysql_error());

echo "<table border=\"1\">\n";

while($row = mysql_fetch_assoc($results))
{
    echo "<tr/n";
    foreach($row as $value)
    {
        echo"<td>\n";
        echo " ";
        echo $value;
        echo " ";
        echo "</td>\n";
    }
    echo "</tr>\n";
 }
 echo "</table\n";

?>
        </div>
    </div>

</body>

<?php include "../css/footer.php" ?>
</html>