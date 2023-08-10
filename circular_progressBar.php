<!DOCTYPE html>
<html>
<body>
<?php
	for ($i = 0; $i < 100; $i+= 6 ){
		($i < 50)? $x = $i*3.6 : $x = ($i-50)*3.6;
		echo "<svg width='102' height='102' style='zoom:130%;'>
		  <style>.r".$i." { animation: sf".$i." 1s ease-out 0s forwards;
		  transform-origin: 50% 50%;} @keyframes sf".$i." {0% {transform: rotate(0);}
		  100% {transform: rotate(".$x."deg);}}</style>
		  <circle cx='51' cy='51' r='41' stroke='#3FFF' stroke-width='20'/>
		  <path d='M51,0 a1,1 1 0,1 0,101' fill='blue'/>
		  <path d='M51,0 a1,1 1 0,1 0,101' class='r".$i."' ";
		if ($i < 50){echo "fill='#3FFF' stroke='#3FFF' stroke-width='1'";} else {echo "fill='blue'";}
		echo "/><circle cx='51' cy='51' r='40' fill='#FFF'/>
		  <text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle'>".$i."%</text>
		  <circle cx='51' cy='51' r='51' stroke='#FFF' stroke-width='2' fill-opacity='0'/> </svg>";	
	} 
?>
</body>
</html>