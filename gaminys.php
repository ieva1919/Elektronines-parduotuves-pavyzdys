<?php include('start.php') ?>
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>
<?php include('header.php'); ?>

<?php
$id = $_GET['id'];
$sql = "SELECT id, kaina, senaKaina, kiekis, pavadinimas, pilnasAprasymas, img, kategorija FROM gaminiai WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$sql = "SELECT gaminiai.id, gaminiai.kaina, gaminiai.senaKaina, gaminiai.pavadinimas, gaminiai.img, rekomendacijospirkejui.id2
FROM gaminiai
JOIN rekomendacijospirkejui
ON gaminiai.id=rekomendacijospirkejui.id2
WHERE rekomendacijospirkejui.id = 2 
LIMIT 4"; 
$siulomas = mysqli_query($conn, $sql);
?>


<div class="container">
	<div class="row gaminioremai">
		<div class="col-md-6">
			<div class="card bg-light">
				<img src="img/<?php echo $row['img'] ?>" class="img-thumbnail" alt="sampunas"> 
			</div>     
		</div>
		<div class="col-md-6">
			<h2><?php echo $row['pavadinimas'] ?></h2>
			<div class="kaina">
				<span><s><?php echo number_format($row['senaKaina'] / 100, 2) ?> EUR</s></span><br>
				<span class="akcija"><?php echo number_format($row['kaina'] / 100, 2) ?> EUR</span>
				<?php if ($row['kiekis'] <> null) { ?>
				<p><?php echo $row['kiekis'] ?></p>
				<?php } ?>
			</div>
			<div class="input-group mb-3 search qtyupanddown">
				<input type="number" min="1" value="1" />
			</div>
			<a href="#" class="btn btn-primary">Dėti į krepšelį</a>
		</div>
	</div>
</div>
<div class="container aprasymas">
	<h3>Gaminio aprašymas</h3>
	<p> <?php echo $row['pilnasAprasymas'] ?></p>
</div>
<div class="container">
	<div class="atgal">
		<div class="row">
		<div class="col-md-3">
			<button class="btn btn-link" onclick="back()">Atgal</button>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class ="borderpilkas">
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<p class="h3">Jums taip pat gali patikti</p>
			</div>
			<div class="col-md-1">
			</div>
		</div>
	</div>	
</div>
<div class="container straipsniai">
	<div class="margin">
		<div class="row">
		<?php	while($row = mysqli_fetch_assoc($siulomas)) { ?>
			<div class="col-md-3">
				<div class="card bg-light">
					<img src="img/<?php echo $row['img'] ?>" class="img-thumbnail" alt="kosmetinė"> 
					<h4 class="card-title"><?php echo $row['pavadinimas'] ?></h4>
					<span><s><?php echo number_format($row['senaKaina'] / 100, 2) ?> EUR</s></span>
					<span class="akcija"><?php echo number_format($row['kaina'] / 100, 2) ?>  EUR</span>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>