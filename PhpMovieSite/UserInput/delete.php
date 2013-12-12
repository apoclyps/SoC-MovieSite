<html>
</head>

    <link rel="stylesheet" type="text/css" href="../css/web.css" />
</head>

 <body>

 <?php include "../css/header.php"; ?>

    <div id="banner"> .</div>
      <div id="body_border">
        <div style="text-align: center;">


<?php
$db = mysql_connect('localhost', 'root', '') or
    die ('Unable to connect. Check your connection parameters.');
mysql_select_db('moviesite', $db) or die(mysql_error($db));

if (!isset($_GET['do']) || $_GET['do'] != 1) {
    switch ($_GET['type']) {
    case 'movie':
        echo 'Are you sure you want to delete this movie?<br/>';
        break;
    case 'people':
        echo 'Are you sure you want to delete this person?<br/>';
        break;
    }
    echo '<a href="' . $_SERVER['REQUEST_URI'] . '&do=1">yes</a> ';
    echo 'or <a href="admin.php">no</a>';
} else {
    switch ($_GET['type']) {
    case 'people':
        $query = 'UPDATE movie SET
                movie_leadactor = 0
            WHERE
                movie_leadactor = ' . $_GET['id'];
        $result = mysql_query($query, $db) or die(mysql_error($db));

        $query = 'DELETE FROM people
            WHERE
                people_id = ' . $_GET['id'];
        $result = mysql_query($query, $db) or die(mysql_error($db));
?>
<p style="text-align: center;">Your person has been deleted.
<a href="../login/mainmenu.php">Return to main menu</a></p>
<?php
        break;
    case 'movie':
        $query = 'DELETE FROM movie
            WHERE
                movie_id = ' . $_GET['id'];
        $result = mysql_query($query, $db) or die(mysql_error($db));
?>
<p style="text-align: center;">Your movie has been deleted.
<a href="../login/mainmenu.php">Return to main menu</a></p>
<?php
        break;
    }
}
?>

        </div>
      </div>
 </body>
</html>