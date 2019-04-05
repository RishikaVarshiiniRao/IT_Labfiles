/* <html>
<head>
<title>Global</title>
</head>

<body>

<?php $x=5;
function myTest() {
global $x;
echo "<p> variables x  inside function is $x </p>";


}
myTest();
echo "<p>Variable x is outside function is:$x</p>"
?>

</body>

</html>

 */


<?php  
$x=5;
$y=10;

function myT() {
global $x, $y;

$y=$x+$y;

}

myT();
echo $y;
?>
