<html>
<head>
	<meta charset="utf-8">
	<title> Добавление пользователя</title>
	<link href="style.css" rel="stylesheet">
	
</head>
<body>

<div class="shift"><form method="post" action="add.php">
	<font size="5">Имя пользователя </font><br />
	<input type="text" name="user" required /><br />
	<font size="5">Возраст</font><br />
	<input type="number" name="age" min="10" max="100" required /><br />
	<font size="5">Город</font><br />
<?php
	include_once("db.php");
	$sql = "SELECT * FROM city ORDER BY gorod ASC";
	$result_select = mysql_query($sql);
	echo "<select name = 'gorod'>";
	
	while($object = mysql_fetch_object($result_select)){
		echo "<option value = '$object->id' > $object->gorod </option>";
	}
		echo "</select>";
?>
	<br />
	<br><input type="submit" name="add" value="Добавить" /><br />
	<br><a href="index.php"> Вернуться к списку пользователей</a><br />

</form></div>
	
<?

include_once("db.php");
if(isset($_POST['add'])) {
		$user= strip_tags(trim($_POST['user']));
		$age= strip_tags(trim($_POST['age']));
		$gorod1=strip_tags(trim($_POST['gorod']));
	
		mysql_query("INSERT INTO users(user, age, Id_City) 
			VALUES ('$user', '$age','$gorod1') ");
			
		mysql_close();
		
	}
	
?>
</body>
</html>

							
												
						
							
										
														