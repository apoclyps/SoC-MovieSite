<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/web.css" />
    </head>
    <body>

 <?php include "../css/header.php"; ?>

    <div id="banner"> .</div>
      <div id="body_border">
        <div style="text-align: center;">


<?php
echo "The movie selected is ";
echo $_REQUEST['movie_name'];

echo "<br>";
echo "Again the movie is ....";
echo $movie_name = $_GET['movie_id'];

echo "<br>";
echo $first_name = $_GET['first_name'];
echo '<br>';
echo $last_name = $_GET['last_name'];
?>

        </div>
      </div>
    </body>
</html>