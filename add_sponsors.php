
<html>
<form method="post" action="add_sponsors">
<?php
	echo validation_errors();

?>
sponsor:<input type="text" name="sponsor"/>
sector:<input type="text" name="sector"/>
country:<input type="text" name="country"/>
president:<input type="text" name="president"/>

		<input type="submit" value="submit" name="save"/>
</form>

</html>


