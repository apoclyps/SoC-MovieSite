<html>
    <head>
        <title>Say my Name</title>
            <link rel="stylesheet" type="text/css" href="../css/web.css" />
    </head>

<body>

     <?php include "../css/header.php"; ?>

    <div id="banner"> .</div>

   <div id="body_border">
        <div style="text-align: center;">

    <?php
        echo'<h1>Hello ' . $_POST['name'] . '!</h1>';
    ?>

    <pre>
        <strong><b>DEBUG;</b></strong>
    <?php
        print_r($_POST);
    ?>
    </pre>

        </div>
   </div>
    <?php include "../css/footer.php";?>
</body>
</html>