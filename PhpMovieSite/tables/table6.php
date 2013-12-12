 <link rel="stylesheet" type="text/css" href="../css/web.css" />

<div id="banner"> .</div>
    <div id="body_border">
         <div style="text-align: center;">

<?php
//connect to MYSQL
$db = mysql_connect('localhost', 'root', '') or
        die ("check your server connection");

// make sure we're using the right database
mysql_select_db("moviesite");

$query ="SELECT movie.movie_id, movie.movie_name,reviews.review_movie_id, reviews.review_comment " .
            "FROM movie,reviews " .
            "WHERE movie.movie_id = reviews.review_movie_id " .
            "ORDER BY movie_id ";

$results = mysql_query($query) or
        die(mysql_error());


echo "<table border=\"1\">\n";
#echo "< table margin= auto>";
while($row = mysql_fetch_assoc($results))
{
    echo "<tr/n";
    foreach($row as $value)
    {
        echo"<td>\n";
        echo $value;
        echo "</td>\n";
    }
echo "</tr>\n";
echo "Test";
 }
 echo "</table\n";
?>

$table .=<<<ENDHTML
    <tr>
    <td>number</td>
    <td>$movie_year</td>
    <td>$movie_director</td>

    </tr>
$table .=<<<ENDHTML

echo $table;
             </div>
    </div>

       <?php include "../css/footer.php"?>