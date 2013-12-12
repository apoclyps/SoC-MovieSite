<html>
    <head>
        <title>Add Movie Data</title>
        <link rel="stylesheet" type="text/css" href="../css/web.css" />
    </head>
<body>

<div id="banner"> .</div>
   <div id="body_border">
        <div style="text-align: center;">

<?php
// connect to MYSQL - Better security to store variables in external file
$connect= mysql_connect("localhost","root","") or
        die("Check  your server connection");

// make sure we're using the right database
mysql_select_db("moviesite");

//insert data into "movie" table
$insert ="INSERT INTO movie(movie_id, movie_name,movie_type, "  .
         "movie_year,movie_leadactor,movie_director) "  .
         "VALUES(1,'Bruce Almighty',5,2003,1,2), " .
         "(2,'Office Space',2,1999,5,6), " .
         "(3, ' Grand Canyon', 2, 1991,4,3)";

$results = mysql_query($insert) or
        die(mysql_error());

echo "Movie Information<br><br>";
echo "Sucessfully Updated<br>";

?>
    </div>
</div>

<?php
if ($_SESSION['counter']=!1)
{
    include"../css/footer.php";
}
;?>