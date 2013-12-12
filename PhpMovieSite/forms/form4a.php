df<?php
// Make sure the user selected a movie type if they're adding a
// movie. If not, then send them back to the first form.
if ($_POST['submit'] == 'Add') {
    if ($_POST['type'] == 'movie' && $_POST['movie_type'] == '') {
        header('Location: ../pages/form4.php');
    }        
}
?>
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
// Show a form to collect more information if the user is adding something
if ($_POST['submit'] == 'Add') {
    echo '<h1>Add ' . ucfirst($_POST['type']) . '</h1>';
?>
  <form action="../forms/form4b.php" method="post">
   <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>"/>
   <table>
    <tr>
     <td><b>Name</b></td>
     <td>
      <?php echo $_POST['name']; ?>
      <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>"/>
     </td>
    </tr>
<?php
    if ($_POST['type'] == 'movie') {
?>
    <tr>
     <td><b>Movie Type</b></td>
     <td>
      <?php echo $_POST['movie_type']; ?>
      <input type="hidden" name="movie_type"
       value="<?php echo $_POST['movie_type']; ?>"/>
     </td>
    </tr><tr>
     <td>Year</td>
     <td><input type="text" name="year" /></td>
    </tr><tr>
     <td><b>Movie Description</b></td>
<?php
    } else {
        echo '<tr><td>Biography</td>';
    }
?>
     <td><textarea name="extra" rows="5" cols="60"></textarea></td>
    </tr><tr>
     <td colspan="2" style="text-align: center;">
<?php
if (isset($_POST['debug'])) {
    echo '<input type="hidden" name="debug" value="on" />';
}
?>
      <input type="submit" name="submit" value="Add" />
     </td>
    </tr>
   </table>
  </form>
<?php
// The user is just searching for something
} else if ($_POST['submit'] == 'Search') {
    echo '<h1>Search for ' . ucfirst($_POST['type']) . '</h1>';
    echo '<p>Searching for ' . $_POST['name'] . '...</p>';
}

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