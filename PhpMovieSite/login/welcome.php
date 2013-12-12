<?php

session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;

?>

<html>
<head>
     <script src="../javascript/welcome_message.js"></script>

    <title> Find my favourite movie</title>
     <link rel="stylesheet" type="text/css" href="../css/web.css" />
</head>

<?php
// check username and password information
if (($_SESSION['username'] == 'Joe') and ($_SESSION['userpass'] == '12345'))
  {
  $_SESSION['authuser']=1;
    }
else{
    include "../css/header.php";

    echo "<div id='banner'> .</div>";
    echo "<div id='body_border'>";
    echo "<div style='text-align: center'>";


    echo "Sorry, but you don't have permission to view this page";
    echo "</div>";
    echo "</div>";

    include "../css/unauthorised_footer.php";

    exit();
    }
?>

<body onload="javascript:welcome_message()">

<?php include "../css/header.php"; ?>

    <div id="banner"> .</div>

<div id="body_border">
      <div style="text-align: center;">

 <div id ='leftcolumn'></div>

    <div id ='leftcolumn'>
        <?php

            echo "<b> Welcome</b> <br> <br>";
            echo "Would you like to view the main menu ? <br> <br>";
            echo "<a href='../login/mainmenu.php'>";
            echo "Main Menu";
            echo "</a>";
            echo "<br>";
      
            ?>
    </div>

  <div id ='leftcolumn'></div>

    </div>
</div>
        <?php include "../css/footer.php";?>

</body>
</html>