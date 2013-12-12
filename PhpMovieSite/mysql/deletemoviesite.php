<html>
    <head>
        <title>Create a movie</title>
        <link rel="stylesheet" type="text/css" href="../css/web.css" />
    </head>
<body>

<div id="banner"> .</div>
   <div id="body_border">
        <div style="text-align: center;">


<?php
$db = mysql_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');

echo 'Connected successfully<br><br>';

$sql = 'DROP DATABASE moviesite';
$retval = mysql_query( $sql, $db );
if(! $retval )
{
  echo'Database could not be delete as Moviesite database does not exist';
  
}
else
{
echo "Database Moviesite<br><br>";
echo "Deleted Sucessfully<br>";
}
mysql_close($db);
?>

        </div>
   </div>

<?php include"../css/footer.php";?>