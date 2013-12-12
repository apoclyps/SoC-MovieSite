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

// inset data into "peoples" table
$people = "INSERT INTO people (people_id, people_fullname, people_isactor,people_isdirector) " .
        "VALUES (1,'Jim Carrey','1','0'), " .
        "(2,'Tom Shadyac','0','1'), " .
        "(3,'Kevin Line','0','1'), " .
        "(4,'Ron livingston','1','0'), " .
        "(5,'Mike Judge','0','1')";

$results=mysql_query($people) or
        die(mysql_error());

echo "Movie Actors<br><br>";
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