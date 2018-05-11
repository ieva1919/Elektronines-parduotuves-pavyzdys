<?php include('start.php') ?>
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>
<?php include('header.php'); ?>

<?php

$products = array();
$cart = $_SESSION['cart'];
if (isset($cart) && count($cart) != 0) {		//jeigu kiekis > 0 , tai selektina produktus is SQL

	$sql = "SELECT id, kaina, senaKaina, img, trumpasAprasymas, Gaminiokodas FROM gaminiai WHERE id IN (" . join(', ', array_keys($cart)) . ")";
	$result = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_assoc($result)) {
		$row['count'] = isset($cart[$row['id']]) ? $cart[$row['id']] : 0;
		$row['amount'] = $row['count'] * $row['kaina'];
		$products[] = $row;  //ideda i masyva
	}
}

?>

<?php if (count($products) == 0) { ?>

<div class="container">
	 <div class="margin text center">
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<p class="h3">Jūsų <strong>prekių krepšelis tuščias</strong>. Išsirinkę prekes spauskite mygtuką "į krepšelį".</p>
				<br>
				<a href="gaminiai.php" class="btn btn-primary margin">Pradėti apsipirkimą >></a>
			</div>
			<div class="col-md-1">
			</div>
		</div>
	</div>
</div>

<?php } else { ?>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<p class="h3">Prekių krepšelis</p>
		</div>
		<div class="col-md-4">
		</div>
	</div>
	<div class="krepselis margin borderpilkas">
		<div class="row">
			<div class="col-md-6 text-center">
				<p>Prekė<p>
			</div>
			<div class="col-md-2">
				<p>Vieneto kaina<p>
			</div>
			<div class="col-md-2">
				<p>Kiekis<p>
			</div>
			<div class="col-md-2">
				<p>Iš viso:<p>
			</div>
		</div>
	</div>
	<div class="krepselis">

		<?php foreach($products as $row) { //kiekvienam produktui kartoja. foreach nes products yra masyvas ?>   

		<div class="row">
			<div class="col-md-2 text-center">
				<img src="img/<?php echo $row['img'] ?>"> 
			</div>
			<div class="col-md-4 text-left">
				<a href="gaminys.php?id=<?php echo $row['id'] ?>"><?php echo $row['trumpasAprasymas'] ?></a>
			</div>
			<div class="col-md-2">
				<p><?php echo number_format($row['kaina'] / 100, 2) ?> EUR<p>
			</div>
			<div class="col-md-2">
				<div class="input-group mb-3 search qtyupanddown">
					<input type="number" min="1" value="<?php echo $row['count'] ?>">
				</div>
			</div>
			<div class="col-md-2">
				<p><?php echo number_format($row['amount'] / 100, 2) ?> EUR</p>
				<button type="button" class="btn btn-default" onclick="setCart(<?php echo $row['id'] ?>, 0)">Ištrinti</button>
			</div>
		</div>

		<?php } ?>

	</div>
	<div class="row">
		<div class="col-md-4">
			<a href="gaminiai.php" class="btn btn-primary margin">Rinktis gaminius</a>
		</div>
		<div class="col-md-4">
		</div>
		<div class="col-md-4 margintop">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#baigtiApsipirkima"> Tęsti apsipirkimą >> </button>
		</div>
	</div>
</div>

<?php } ?>

<div class="modal fade" id="baigtiApsipirkima" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Informacija apie pirkimą</h4>
      </div>
      <div class="modal-body">
        <h3 class="text-center">Dėkojame, kad perkate pas mus. <br> Lauksime Jūsų apmokėjimo.</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
      </div>
    </div>
  </div>
</div>





<div class="container">
	<div class="atgal">
		<div class="row">
		  	<div class="col-md-3">
				<a href="index.php">Grįžti į pagrindinį</a>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>