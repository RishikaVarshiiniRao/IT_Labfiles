  <html>
<body>
<?php 
if( isset($_GET["name"]) || isset($_GET["age"]) ) {
echo "WELCOME".$_GET["name"]."<br/>";
echo "You are ".$_GET["age"]."years old";
exit();
}
?></body>
  </html>
 

