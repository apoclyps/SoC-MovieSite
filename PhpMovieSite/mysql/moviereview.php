<link rel="stylesheet" type="text/css" href="../css/web.css" />

<div id="banner"> .</div>
   <div id="body_border">
        <div style="text-align: center;">

<?php
$db = mysql_connect('localhost',"root","") or
        die("'Unable to connect. Check connection parameters.");
mysql_select_db('moviesite',$db) or die(mysql_error($db));

//create the review table
$query = 'CREATE TABLE reviews (
    review_movie_id     INTEGER UNSIGNED    NOT NULL,
    review_date         DATE                NOT NULL,
    reviewer_name       VARCHAR(255)        NOT NULL,
    review_comment      VARCHAR(255)        NOT NULL,
    review_rating       TINYINT UNSIGNED    NOT NULL DEFAULT 0,

    KEY(review_movie_id)
    )
ENGINE=MyISAM';

mysql_query($query,$db) or die(mysql_error($db));

//Insert new data into the reviews table
$query = <<<ENDSQL
INSERT INTO reviews
    (review_movie_id,review_date,reviewer_name,review_comment,review_rating)
VALUES
(1,"2008-09-23", "John Doe", "I thought this was a great movie even though my
    girlfriend made me see it against my will.",4),
(1,"2008-09-23", "Billy Bob Thornton"," I liked Eraserhead better.",2),
(1,"2008-09-23", "Peppe-Ann", " I wish i'd have seen it sooner!",5),
(2,"2008-09-23", "Marvin Martian", "This is my favourite movie. 
    I didnt't wear my ray gun to the movie but i loved it anyway.",5),
(3,"2008-09-23", "George B.", "I liked this movie, even though i thought it was
    an informational video from my travel agent.", 3)
ENDSQL;
mysql_query($query,$db) or die(mysql_error($db));

echo "Movie Reviews <br><br>";
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




