<?php

session_start();
$_SESSION['counter'] =1;
?>

<html>
<head>
   <title> Find my favourite movie</title>
     <link rel="stylesheet" type="text/css" href="../css/web.css" />
        <script src="../javascript/delete_check.js"></script>
</head>

<body>
 
<?php include "../css/header.php"; ?>

    <div id="banner"> .</div>
      <div id="body_border">
        <div style="text-align: center;">
<!--</div>
 <?php

  echo "<div id ='leftcolumn'>";

 // echo "<div style='text-align:center;'>";
  
            echo "<b>MySQL</b><br>";
            echo "<a href='../mysql/createmovie.php'>";
//			echo "</div>";
			
            echo "Create Database";
            echo "</a>";
            echo "<br>";
			
			echo "<a href='../mysql/moviedata.php'>";
            echo "Add Movies";
            echo "</a>";
            echo "<br>";

            echo "<a href='../mysql/actordata.php'>";
            echo "Add Actors";
            echo "</a>";
            echo "<br>";

            echo "<a href='../mysql/movietype.php'>";
            echo "Add Movie Info";
            echo "</a>";
            echo "<br>";

            echo "<a href='../mysql/moviereview.php'>";
            echo "Add Reviews";
            echo "</a>";
            echo "<br>";

             echo "<a href='../gd/gd1.php'>";
            echo "Add Images";
            echo "</a>";
            echo "<br>";

            echo "<a href='../mysql/updatedatabase.php'>";
            echo "Mass Update";
            echo "</a>";
            echo "<br>";

            echo "<a href='javascript:delete_check()'>";
            echo "Delete Database";
            echo "</a>";
            echo "<br><br>";
 echo "</div>";

 echo "<div id ='leftcolumn'>";
            echo "<b>Favourites</b><br>";
            echo "<a href='../login/movie1.php'>";
            echo "Find Favourites";
            echo "</a>";
            echo "<br><br>";

            echo "<b>External</b><br>";
            echo "<a href='../../phpmyadmin'>";
            echo "PHPmyAdmin";
            echo "</a>";
            echo "<br>";

            echo "<a href='../../phpmyadmin'>";
            echo "SugarCRM";
            echo "</a>";
            echo "<br>";

            echo "<a href='../../phpmyadmin'>";
            echo "vTigerCRM";
            echo "</a>";
            echo "<br>";

            echo "<br><br><br>";

echo "</div>";

echo "<div id ='leftcolumn'>";
            echo "<b>Forms</b><br>";
            echo "<a href='../forms/form4.php'>";
            echo "Main Form";
            echo "</a>";
            echo "<br><br>";

            echo "<a href='../forms/form1.php'>";
            echo "Form 1";
            echo "</a>";
            echo "<br>";

            echo "<a href='../forms/form2.php'>";
            echo "Form 2";
            echo "</a>";
            echo "<br>";

            echo "<a href='../forms/form3.php'>";
            echo "Form 3";
            echo "</a>";
            echo "<br>";

             echo "<br><br><br><br>";
echo "</div>" ;
            
echo "<div id ='leftcolumn'>";
            echo "<b>Tables</b><br>";
            echo "<a href='../tables/table.php'>";
            echo "Table 1";
            echo "</a>";
            echo "<br>";

            echo "<a href='../tables/table2.php'>";
            echo "Table 2";
            echo "</a>";
            echo "<br>";

            echo "<a href='../tables/table3.php'>";
            echo "Table 3";
            echo "</a>";
            echo "<br>";

            echo "<a href='../tables/table5.php'>";
            echo "Table 4";
            echo "</a>";
            echo "<br>";

            echo "<a href='../tables/table6.php'>";
            echo "Table 5";
            echo "</a>";
            echo "<br><br>";

            echo"<br><br><br>";
echo "</div>";

echo "<div id ='leftcolumn'>";
            echo "<b>Select</b><br>";
            echo "<a href='../select/select.php'>";
            echo "Select 1";
            echo "</a>";
            echo "<br>";

            echo "<a href='../select/select2.php'>";
            echo "Select 2";
            echo "</a>";
            echo "<br><br>";

            echo "<b>Images</b><br>";
            echo "<a href='../gd/gd1.php'>";
            echo "Image Test";
            echo "</a>";
            echo "<br>";

            echo "<a href='../gd/upload_image.php'>";
            echo "Upload Image";
            echo "</a>";
            echo "<br>";

            echo "<a href='../gd/c.php'>";
            echo "Check Image";
            echo "</a>";
            echo "<br>";

            echo "<br><br>";
echo "</div>";

echo "<div id ='leftcolumn'>";
            echo "<b>Input</b><br>";
            echo "<a href='../userinput/admin.php'>";
            echo "Admin";
            echo "</a>";
            echo "<br>";

            echo "<a href='../userinput/movie.php'>";
            echo "Movie";
            echo "</a>";
            echo "<br>";

            echo "<a href='../userinput/commit.php'>";
            echo "Commit";
            echo "</a>";
            echo "<br>";

            echo "<a href='../userinput/delete.php'>";
            echo "Delete";
            echo "</a>";
            echo "<br>";

            echo "<br><br><br><br><br>";
echo "</div>";

            ?>

    </div>
</div>
        <?php include "../css/footer.php";?>

</body>
</html>