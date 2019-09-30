<?php include "menu.php"; ?>
<?php include 'connection.php'; ?>
<?php
?>
	<h2>Tuotteet</h2>
	<p>
		<ul>
			<?php
			foreach ($products as $row) {
				echo '<li>';
				echo $row['name'].'<br>';
				echo '<img src="images/'.$row['image'].'" alt="product image"> <br>';
				if(isset($_SESSION['logged_in'])){
					//echo '<a href="basket.php?id_products='.$row['id_products'].'">To basket</a>';
					echo '<form action="basket2.php" method="post">';
					echo '<label>Amount:</label>';
					echo '<input type="number" name="amount"><br>';
					echo '<input type="hidden" name="id_products" value="'.$row['id_products'].'"';
					echo '<br><input type="submit" value="Add to basket">';
					echo '</form>';
				}
				echo '</li>';
				echo '<hr>';
			}
			?>
		</ul>
	</p>
<?php include "footer.php"; ?>
