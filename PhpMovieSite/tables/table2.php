 <link rel="stylesheet" type="text/css" href="../css/web.css" />

    <div id="banner"> .</div>
    <div id="body_border">
    <div style="text-align: center;">

<?php
//connect to MySQL
$db = mysql_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
// make sure you’re using the right database
mysql_select_db('moviesite', $db) or die(mysql_error($db));

// retrieve information
$query = 'SELECT
        movie_name, movie_year, movie_director, movie_leadactor,
        movie_type
    FROM
        movie
    ORDER BY
        movie_year DESC';
$result = mysql_query($query, $db) or die(mysql_error($db));
// determine number of rows in returned result
$num_movies = mysql_num_rows($result);

$table = <<<ENDHTML
<div style="text-align: center;">
<h2> Movie Review Database </h2>
<table border="1" cellpadding="2" cellspacing="2"
style="width: 70%; margin-left: auto; margin-right: auto;" >
<tr>
<th> Movie Title </th>
<th> Year of Release </th>
<th> Movie Director </th>
<th> Movie Lead Actor </th>
<th> Movie Type </th>
</tr>
ENDHTML;

// loop through the results
while ($row = mysql_fetch_assoc($result)) {
extract($row);

$table .= <<< ENDHTML
    <tr>
    <td> $movie_name </td>
    <td> $movie_year </td>
    <td> $movie_director </td>
    <td> $movie_leadactor </td>
    <td> $movie_type </td>
    </tr>
ENDHTML;

}

$table .=<<<ENDHTML
    <tr>
    <td> $movie_name </td>
    <td> $movie_year </td>
    <td> $movie_director </td>
    <td> $movie_leadactor </td>
    <td> $movie_type </td>
    </tr>
ENDHTML;

$table .=<<<ENDHTML
</table>
<p>Selected $num_movies Movies</p>
</div>
ENDHTML;

echo $table;
?>
    </div>
        </div>

       <?php include "../css/footer.php"?>