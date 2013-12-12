<?php
session_unset();
$_SESSION['authuser']=0;
?>

<html>
    <head>
        <title>Please Log in</title>
        <link rel="stylesheet" type="text/css" href="../css/web.css" />
    </head>
<body>
      <?php include "../css/header.php"; ?>
      
    <div id="banner"> .</div>

   <div id="body_border">
        <div style="text-align: center;">


            <div id="label">
    <form method="post" action = "../login/welcome.php">
        <p>  Enter your Username:
            <input type ="text" size ="14" name = "user">
        </p>
        <p> Enter your Password:
            <input type ="password" size="12" name ="pass">
        </p>
        <p>
            <br>
           <input type ="submit" name ="Submit"  value = "Submit">
        </p>
    </form>
            </div>
            
        </div>
    </div>

    <div id="footer"> . </div>
    
</body>
</html>