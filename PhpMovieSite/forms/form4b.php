<html>
 <head>
  <title>Multipurpose Form</title>
  <link rel="stylesheet" type="text/css" href="../css/web.css" />
  </head>

<body>

     <?php include "../css/header.php"; ?>

 <div id="banner"> .</div>
   <div id="body_border">
       <div style="text-align: center;">


<?php
if ($_POST['type'] == 'movie') {
    echo '<h1>New ' . ucfirst($_POST['movie_type']) . ': ';
} else {
    echo '<h1>New ' . ucfirst($_POST['type']) . ': ';
}
echo $_POST['name'] . '</h1>';

echo '<table>';
if ($_POST['type'] == 'movie') {
    echo '<tr>';
    echo '<td>Year</td>';
    echo '<td>' . $_POST['year'] . '</td>';
    echo '</tr><tr>';
    echo '<td>Movie Description</td>';
} else {
    echo '<tr><td>Biography</td>';
}
echo '<td>' . nl2br($_POST['extra']) . '</td>';
echo '</tr>';
echo '</table>';

if (isset($_POST['debug'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
?>
       </div>
   </div>

  <?php include "../css/footer.php";?>

 </body>
</html>