<html>
    <head>
        <title> Say My Name</title>
        <link rel="stylesheet" type="text/css" href="../css/web.css" />
    </head>
<body>
    
     <?php include "../css/header.php"; ?>
      
    <div id="banner"> .</div>

   <div id="body_border">
        <div style="text-align: center;">
    
    <form action="../forms/formprocess1.php" method="post">
        <table>
            <tr>
                <td>name</td>
                <td><input type="text" name ="name" /></td>
            </tr>
            <tr>
                <td colspan="2" style="text-aligh:center;">       
            <input type="submit" name="submit" value="submit" /></td> 
            </tr>
        </table>
    </form>
        </div>
   </div>
    
    <?php include "../css/footer.php" ?>
</body>
</html>