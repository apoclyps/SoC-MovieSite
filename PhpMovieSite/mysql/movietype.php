<link rel="stylesheet" type="text/css" href="../css/web.css" />

<div id="banner"> .</div>
   <div id="body_border">
        <div style="text-align: center;">

<?php
// connect to MYSQL - Better security to store variables in external file
$connect= mysql_connect("localhost","root","") or
        die("Check  your server connection");

// make sure we're using the right database
mysql_select_db("moviesite");

//Insert data into " movietype" table
$type = "INSERT INTO movietype(movietype_id,movietype_label) " .
        "VALUES(1,'Sci Fi'), " .
        "(2, 'Drama'), " .
        "(3, 'Adventure'), " .
        "(4, 'War'), " .
        "(5, 'Comedy'), " .
        "(6, 'Horror'), " .
        "(7, 'Action'), " .
        "(8, 'Kids')";

$results = mysql_query($type) or
        die(mysql_error());

echo "Movie Types<br><br>";
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