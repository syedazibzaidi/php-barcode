<?php
if(isset($_POST['generate']))
{
	$code=$_POST['barcode'];
	echo "<center><img alt='Image' src='barcode.php?codetype=Code39&size=50&text=".$code."&print=true' /> </center>";
}


?>