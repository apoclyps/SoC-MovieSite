<html>
<head>
    <title>Greetings Earthling's</title>
    <link rel="stylesheet" type="text/css" href="../css/web.css" />
</head>
<body>

     <?php include "../css/header.php"; ?>

    <div id="banner"> .</div>

   <div id="body_border">
        <div style="text-align: center;">


	<form action="../forms/formprocess2.php" method="post">
		<table>
		<tr>
	<td> Name </td>
	<td> <input type="text" name ="name" /> </td>
		</tr><tr>
	<td>Greetings</td>
	<td>
	 <select name="greeting">
		<option value="Hello">Hello</option>
		<option value="Hola">Hola</option>
		<option value="Bonjour">Bonjour</option>
		</select>
	</td>
	</tr><tr>
	 <td></td>
	<td>
	<input type ="Checkbox" name="debug" checked="checked"/>
	Display Debug Info
	</td>
	</tr><tr>
	 <td colspann="2" style ="text-align:center">
 		<input type="Submit" name="submit" value="submit" />
	</td>
	</tr>
</table>
</form>

        </div>
   </div>
    
    <?php include"../css/footer.php";?>
</body>
</html>

