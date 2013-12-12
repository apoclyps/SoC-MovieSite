<html>
<head>
<title>Greetings Earthling's</title>
<<link rel="stylesheet" type="text/css" href="../css/web.css" />
    </head>

<body>

     <?php include "../css/header.php"; ?>

    <div id="banner"> .</div>

   <div id="body_border">
        <div style="text-align: center;">


<?php
	echo '<h1>' .$_POST['greeting'] . ' ' . $_POST['name'] . '!</h1>';

	if(isset($_POST['debug']))
	{
		echo '<pre><strong>DEBUG:</strong>' . "\n";
		print_r($_POST);
		echo '</pre>';
	}

?>

        </div>
   </div>
    <?php include "../css/footer.php";?>

</body>
</html>
