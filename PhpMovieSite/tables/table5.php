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
        people.people_id,people.people_fullname,movietype.movietype_label
    FROM
        people,movietype
    ORDER BY
        people_id ASC
    WHERE
        people.people_id=movietype.movietype_id';

$result = mysql_query($query, $db) or die(mysql_error($db));
// determine number of rows in returned result
$num_people = mysql_num_rows($result);
?>

    <div style="text-align: center;">
        <table border="1" cellpadding="2" cellspacing="2"
    style="width: 70%; margin-left: auto; margin-right: auto;">
        <tr>
            <th> People ID</th>
            <th> People Full name </th>
        </tr>

<?php
// loop through the results
while ($row = mysql_fetch_assoc($result)) {
extract($row);
echo ' <tr> ';
echo ' <td> ' . $people_id . ' </td> ';
echo ' <td> ' . $people_fullname . ' </td> ';

echo ' </tr> ';
}
?>
</table>

<p> <?php echo $num_people; ?> People </p>
    </div>

         </div>
    </div>

       <?php include "../css/footer.php"?>