<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Movie Reviews</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
</head>
<body>

<div id="wrap">

<div id="footer"> 
<h2> Movie Reviews </h2>
</div>

<div id="header">
    <div id="header_banner"
    <img src="images/movie-banner.jpg" alt="Example pic" style="border: 3px solid #ccc;" />
    </div>
</div>

<div id="footer">

    <b>
	
<h1> Movie Listings</h1>
    </b>
</div>


<div class="left">

<h2><a href="#">Current Movie Listing's</a></h2>
<div class="articles">

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
        movie_name ASC,
        movie_year DESC';
$result = mysql_query($query, $db) or die(mysql_error($db));
// determine number of rows in returned result
$num_movies = mysql_num_rows($result);
?>

    <div style="text-align: center;">
    <table border="1" cellpadding="2" cellspacing="2"
    style="width: 70%; margin-left: auto; margin-right: auto;">
        <tr>
            <th> Movie Title </th>
            <th> Year of Release </th>
            <th> Movie Director </th>
            <th> Movie Lead Actor </th>
            <th> Movie Type </th>
        </tr>

<?php
// loop through the results
while ($row = mysql_fetch_assoc($result)) {
extract($row);
echo ' <tr> ';
echo ' <td> ' . $movie_name . ' </td> ';
echo ' <td> ' . $movie_year . ' </td> ';
echo ' <td> ' . $movie_director . ' </td> ';
echo ' <td> ' . $movie_leadactor . ' </td> ';
echo ' <td> ' . $movie_type . ' </td> ';
echo ' </tr> ';
}
?>
</table>

<p> <?php echo $num_movies; ?> Movies </p>
    </div>

    </div>
    </div>



<div class="right">

    <b> Navagation <br><br>
      
<p><a href="index.php"> Home </a></p>
<p><a href="about.php"> About us </a></p>
<p><a href="movies.php"> Movies </a></p>
<p><a href="reviews.php"> Reviews </a></p>
<p><a href="contact.php"> Contact us </a></p>
<br>
<p><a href="login.php"> Login </a></p>
    </b>
    
</div>
<div style="clear: both;"> </div>



<div id="footer">
 Created by Apoclyps
</div>
</div>

</body>
</html>