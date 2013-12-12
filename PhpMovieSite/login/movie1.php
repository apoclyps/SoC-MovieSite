<?php

session_start();

?>

<html>
<head>
    <title> Find my favourite movie</title>
    <link rel="stylesheet" type="text/css" href="../css/web.css" />

    <?php
// check username and password information
if ($_SESSION['authuser']=1);
else{
    include "../css/header.php";

    echo "<div id='banner'> .</div>";
    echo "<div id='body_border'>";
    echo "<div style='text-align: center'>";


    echo "Sorry, but you don't have permission to view this page<br><br>";
    echo "Details Incorrect";
    echo "</div>";
    echo "</div>";

    include "../css/footer.php";

    exit();
    }
?>

</head>

<body>

     <?php include "../css/header.php"; ?>

        <div id="banner"> .</div>
        <div id="body_border">
        <div style="text-align: center;">
    
     <?php
    $myfavmovie = urlencode("Life of Brian");

    echo "<a href='../login/moviesite.php?favmovie=$myfavmovie'>";
    echo "Click here to see information about my favourite movie!";
    echo "</a>";
    echo "<br>";

    echo "or choose how many movies you would like to see:";
    echo "</a>";
    echo "<br>";
    ?>
    
    <form method="post" action="../login/moviesite.php">
        <p> Enter the number of movies ( up to 10):
            <input type ="text" name ="num"
            <br><br>
            Check here if you want the list sorted alphabetically:
            <input type="checkbox" name="sorted">
        </p>
        <input type ="submit" name="Submit" value ="Submit">
    </form>

    </div>       
</div>
        <?php include "../css/footer.php"; ?>
        
</body>
</html>