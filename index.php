<html>
 <head>
  <title>Hi</title>
 </head>
 <body>
 <?php 
$number = 14;
echo "Number $number" . "<br>";
for ($x=1; $x < $number; $x++) { 
	for ($y=1; $y < $number; $y++) { 
		for ($z=1; $z < $number; $z++) { 
			if ($x*$x + $y*$y + $z*$z == $number) {
				echo $x . " " . $y . " " . $z . "<br>";
			}
		}
	}
}


echo '<p>Hello, world!!!!</p>'; ?>
 </body>
</html>
