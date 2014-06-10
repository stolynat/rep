<html>
 <head>
  <title>Hi</title>
 </head>
 <body>
 <?php 
$counter=0;
$n=10;
while ($n>1){
 $n=$n/2;
 $counter=$counter+1;
}
echo "Number $n" . "<br>";
echo "The closest number 2^r:" . "<br>";
echo (pow(2, $counter) . "<br>");
echo "R:  $counter";


echo '<p>Hello, world!!!!</p>'; ?>
 </body>
</html>
