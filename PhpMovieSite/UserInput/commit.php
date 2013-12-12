<?php
$db = mysql_connect('localhost','root','') or
	die('Unable to connect. Check connection paramaters');

mysql_select_db('moviesite',$db) or die(mysql_error($db));
?>
<html>
<head
<title>Commit2</title>
<link rel="stylesheet" type="text/css" href="../css/web.css" />
</head>

 <body>

 <?php include "../css/header.php"; ?>

    <div id="banner"> .</div>
      <div id="body_border">
        <div style="text-align: center;">

 <?php
	switch($_GET['action'])
	{
		case 'add' :
			switch ($_GET['type'])
			{
				case 'movie' :
				$query = 'Insert into
					movie
						(movie_name,movie_year,movie_type,movie_leadactor,movie_director)
					VALUES
						("' . $_POST['movie_name'] . '",
						' . $_POST['movie_year'] . ',
                                                ' . $_POST['movie_type'] . ',
						' . $_POST['movie_leadactor'] . ',
						' . $_POST['movie_director'] . ')';
				break;
			}
		break;



        case 'edit' :
            switch ($_GET['type'])
        {
            case 'movie':
            $query = 'UPDATE movie SET
                    movie_name = "' . $_POST['movie_name'] . '",
                    movie_year = ' . $_POST['movie_year'] . ',
                    movie_type = ' . $_POST['movie_type'] . ',
                    movie_leadactor = ' . $_POST['movie_leadactor'] . ',
                    movie_director = ' . $_POST['movie_director'] . '
           WHERE
                    movie_id = ' . $_POST['movie_id'];
           break;
	}
     break;
    }
       

if(isset($query))
	{
		$result = mysql_query($query,$db) or die(mysql_error($db));
	}
	?>

	<p>Complete</p><br>
        <p>New Movie has been added to Database</p>

        </div>
      </div>
   <?php include"../css/footer.php"; ?>

</body>
<html>