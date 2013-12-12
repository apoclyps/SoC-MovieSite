<?php
session_start();
// check to see if user has logged in with a valid password
if(isset($_SESSION['authuser']))
{
    if ($_SESSION['authuser'] != 1)
    {
        echo "Sorry, but you don't have permission to view this page";
        exit();
    }
}
?>

<html>
<head>
    <title> My Movie site - <?php echo $_REQUEST['s']; ?> </title>
    <link rel="stylesheet" type="text/css" href="../css/web.css" />
</head>

<body>
    <?php include "../css/header.php"; ?>
    
    <div id="banner"> .</div>
    <div id="body_border">
    <div style="text-align: center;">
        
    <?php
   $favmovies = array("Life of Brian",
                       "Stripes","Office Space",
                       "The Holy Grail",
                       "Matrix",
                       "Terminator 2",
                       "Star Wars",
                       "Close Encounters of the Third Kind",
                       "Sixteen Candles",
                       "Caddyshack");


    if (isset($_REQUEST['favmovie']))
    {
        echo "Welcome to our site, ";
        echo $_SESSION['username'];
        echo "! <br><br>";
        
        echo "My favourite movie is ";
        echo $_REQUEST['favmovie'];
        echo "<br><br>";
        $movierate =5;
        echo "My movie rating for this movie is :";
        echo $movierate;

    } else
    {

        echo "<b>";
        echo "My top " . $_POST["num"] . " movies are: <br>";
        echo "</b><br>";
                        
        if (isset($_REQUEST['sorted']))
        {
            sort($favmovies);
        }

        //list the movies
        $numlist = 1;
        while($numlist <= $_POST["num"]){
            
            if($numlist!=11)
            {      
                echo $numlist;
                echo". ";
                echo pos($favmovies);
                next($favmovies);
                echo "<br>\n";
                $numlist = $numlist +1;
            }
            else {
                $numlist+1;
            }
           
        }

        if($numlist=1)
        {
            echo "<br><br>";
        }
    }

    ?>
    </div>
</div>

<?php include "../css/footer.php";?>
    
</body>
</html>