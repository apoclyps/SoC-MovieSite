<html>
    <body>

<div id="banner"> .</div>
   <div id="body_border">
        <div style="text-align: center;">


<?php
$db = mysql_connect('localhost','root','') or
        die('Unable to connect. check your connection parameters.');
mysql_select_db('moviesite',$db) or die(mysql_error($db));

//Creat ethe image table

$query = 'CREATE TABLE images (
            image_id        INTEGER     NOT NULL AUTO_INCREMENT,
            image_caption   VARCHAR(255)    NOT NULL,
            image_username  VARCHAR(255)    NOT NULL,
            image_filename  VARCHAR(255)    NOT NULL DEFAULT "",
            image_date      DATE            NOT NULL,
            PRIMARY KEY (image_id)
)
ENGINE=MyISAM';
mysql_query($query,$db) or die(mysql_error($db));

echo 'Images Information';
echo '<br><br>';
echo 'Sucessfully Created';
?>

        </div>
   </div>

    </body>
</html>