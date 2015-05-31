<html>
<form method="post" action="add_cars">
<?php
	echo validation_errors();

?>
model:<input type="text" name="model"/>
year:<input type="text" name="year"/>
price:<input type="text" name="price"/>
maxSpeed:<input type="text" name="maxSpeed"/>

		<input type="submit" value="submit" name="save"/>
</form>
</html>