<html>
    <head>
	<title> Add/Search Entry</title>
        <link rel="stylesheet" type="text/css" href="../css/web.css" />
    </head>
<body>

     <?php include "../css/header.php"; ?>

   <div id="banner"> .</div>
       <div id="body_border">
            <div style="text-align: center;">


<?php
    if($_POST['type'] == 'movie' && $_POST['movie_type'] == '')
    {
            header('Location: form3.php');
    }
?>

<html>
    <head>
	<title><?php echo $_POST['submit'] . ' ' . $_POST['type'] . ': ' .
		$_POST['name']; ?>
        </title>
    </head>

	<body>
	<?php
		if(isset($_POST['debug']))
		{
			echo '<pre>';
			print_r($_POST);
			echo '</pre>';
		}

		$name = ucfirst($_POST['name']);
		if($_POST['type'] == 'movie')
		{
			$foo =$_POST['movie_type'] . ' ' . $_POST['type'];
		}
		else
		{
			$foo =$_POST['type'];
		}

		echo '<p>You are ' . $_POST['submit'] . 'ing ';
		echo ($_POST['submit'] == 'Search') ? 'for ' : '';
		echo 'a ' . $foo . ' named ' . $name . '</p>';
	?>

          </div>
     </div>
            
     </body>
</html>
	
