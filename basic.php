<?php include "menu.php"; ?>
	<h2>Tuoteryhmät</h2>
	<p>
		This is the Categories.
	<h2>Variables</h2>
  <img src=”/UniServerZ\www\projekti1/kuva1.jpg” alt="Image"width=”104” height=”142”>
	<p>
    Muuttujien nimet alkavat aina dollarimerkillä.
	</p>
	<?php
	$name="Juha";
	echo 'Terve '.$name;
	?>
	<h2>if-else</h2>
	<?php
	$year=2019;
	if ($year <2000) {
		echo 'Ennen vuotta 2000';
	}
		else {
			echo 'Vuoden 2000 jalkeen';
	}
	 ?>
	 <h2>Loopit</h2>
	 <p>
   PHP:ssä voi käyttää for, while ja foreach looppeja.
	 </p>
	 <?php
   for($x=1; $x <=5 ; $x++) {
     echo 'rivi '.$x.'<br>';
	}
	  ?>
<?php include "footer.php"; ?>
