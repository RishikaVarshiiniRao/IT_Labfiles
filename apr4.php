<html>
<head>
<title>Variables</title>
</head>
<?php 
//$salaries=array("james"=>1000,"shweta"=>1500,"sunil"=>2000);
//$x="hello"."world";

//echo"salary of james is",$salaries["james"];
//echo "$x";

if($_POST["name"] || $_POST["age"]) {
	echo "welcome ".$_POST["name"]."<br/>";
	echo "you are ".$_POST["age"]."years old";

	exit();
}
?>
<body>
<form action="<?php $_PHP_SELF?>" method="POST">
Name:<input type="text" name="name"/>
Age:<input type="text" name="age"/>
<input type="submit"/>
</form>
</body>
</html>

