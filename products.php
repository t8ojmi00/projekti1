<?php include "menu.php"; ?>
<br>
<?php
?>
		<ul>
			<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: #744004;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #f7261e;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align: center">Tuotteet</h2>

<div class="card">
  <img src="Tietokone.JPG" alt="Lenovo Yoga 920 13,9" style="width:100%">
  <h1>Lenovo Yoga 920 13,9" 2-in-1 (platina)</h1>
  <p class="price"><b>1899.00 €</b></p>
  <p>Intel® Core™ i7-8550U prosessori</p>
	<p>13,9" Full HD -kosketusnäyttö</p>
	<p>16 GB DDR4 RAM, 512 GB SSD-muisti</p> <br>
					<p>Määrä: <input type="number" name="amount"></p>
  <p><button>Lisää ostoskoriin</button></p>
</div>
<br>
<hr>
<br>
</body>
</html>

<div class="card">
	<img src="Tabletti.JPG" alt="Lenovo Tab M10 10,1" style="width:100%">
	<h1>Lenovo Tab M10 10,1" tabletti 32 GB WiFi (musta)</h1>
	<p class="price"><b>249.00 €</b></p>
	<p>10,1" Full HD IPS -näyttö</p>
	<p>Android 8.1 Oreo, WiFi-ac</p>
	<p>Kaksi etukaiutinta</p> <br>
					<p>Määrä: <input type="number" name="amount"></p>
	<p><button>Lisää ostoskoriin</button></p>
</div>
<br>
<hr>
<br>
<div class="card">
	<img src="Bt kaiutin.JPG" alt="Bose SoundLink Revolve+" style="width:100%">
	<h1>Bose SoundLink Revolve+ langaton kaiutin (musta)</h1>
	<p class="price"><b>299.00 €</b></p>
	<p>Kannettava langaton kaiutin</p>
	<p>360° ääni</p>
	<p>Jopa 16 tunnin akunkesto</p> <br>
					<p>Määrä: <input type="number" name="amount"></p>
	<p><button>Lisää ostoskoriin</button></p>
</div>

<?php include "footer.php"; ?>
