<html>
<h1> List All Cars</h1>
<body>
 <table border=1>
 <thead><tr><th>Модел</th><th>Година</th><th>Цена</th>
 <th>Макс_скорост</th>	
</tr>
 </thead>	
<?php foreach($all_cars as $car)

	echo"<tr><td>$car[model]</td><td>$car[year]</td>
	<td>$car[price]</td><td>$car[maxSpeed]</td></tr>";
	?>

</table>
</body>
</html>