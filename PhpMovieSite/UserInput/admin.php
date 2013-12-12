<?php
$db = mysql_connect('localhost', 'root', '') or
    die ('Unable to connect. Check your connection parameters.');
mysql_select_db('moviesite', $db) or die(mysql_error($db));
?>
<html>
 <head>
  <title>Movie database</title>
    <link rel="stylesheet" type="text/css" href="../css/web.css" />
 </head>
 <body>

 <?php include "../css/header.php"; ?>

    <div id="banner"> .</div>
      <div id="body_border">
        <div style="text-align: center;">
            <div id="body_table">

 <table style="width:60%;">
  <tr>
   <th colspan="2">Movies <a href="movie.php?action=add">[ADD]</a></th>
  </tr>
<?php
$query = 'SELECT * FROM movie';
$result = mysql_query($query, $db) or die (mysql_error($db));

$odd = true;
while ($row = mysql_fetch_assoc($result)) {
    echo ($odd == true) ? '<tr class="odd_row">' : '<tr class="even_row">';
    $odd = !$odd;
    echo '<td style="width:75%;">';
    echo $row['movie_name'];
    echo '</td><td>';

   
    echo ' <a href="display_movie_info.php?movie_name=<?php movie_name++;?>"> [VIEW] </a>';

    echo ' <a href="movie.php?action=edit&id=' . $row['movie_id'] . '"> [EDIT]</a>';
    echo ' <a href="delete.php?type=movie&id=' . $row['movie_id'] . '"> [DELETE]</a>';
    echo '</td></tr>';
}
?>
  <tr>
    <th colspan="2">People <a href="people.php?action=add"> [ADD]</a></th>
  </tr>
<?php
$query = 'SELECT * FROM people';
$result = mysql_query($query, $db) or die (mysql_error($db));

$odd = true;
while ($row = mysql_fetch_assoc($result)) {
    echo ($odd == true) ? '<tr class="odd_row">' : '<tr class="even_row">';
    $odd = !$odd;
    echo '<td style="width: 25%;">';
    echo $row['people_fullname'];
    echo '</td><td>';
    echo ' <a href="people.php?action=edit&id=' . $row['people_id'] .
        '"> [EDIT]</a>';
    echo ' <a href="delete.php?type=people&id=' . $row['people_id'] .
        '"> [DELETE]</a>';
    echo '</td></tr>';
}
?>
  </table>

            </div>
        </div>
          </div
            <?php include "../css/footer.php";

         $movie_name = 'Robocop';
         $first_name = 'Joe';
         $last_name = 'Jones';

         ?>

         <?php echo "<a href='display_movie_info.php?first_name=$first_name&last_name=$last_name&movie_name=$movie_name'> Display Movie </a>"; ?>

 </body>
</html>