<?php include('start.php') ?>
<!DOCTYPE html>
<html>
	<?php include('head.php'); ?>
<body>

<?php include('header.php'); ?>

<?php
$sql = "SELECT gaminiai.id, gaminiai.kaina, gaminiai.senaKaina, gaminiai.pavadinimas, gaminiai.img, rekomendacijospirkejui.id2
FROM gaminiai
JOIN rekomendacijospirkejui
ON gaminiai.id=rekomendacijospirkejui.id2
WHERE rekomendacijospirkejui.id = 2
LIMIT 4"; 
$result = mysqli_query($conn, $sql);
?>

<div class="container">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
 	 	</ol>
		<div class="carousel-inner">
			<div class="item active"><img src="img/karusele/foto.jpg"></div>
			<div class="item"><img src="img/karusele/foto1.jpg"></div>
			<div class="item"><img src="img/karusele/foto2.jpg"></div>
			<div class="item"><img src="img/karusele/foto3.jpg"></div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<a href="#" target="_blank"><img src="img/akcijosreklama.jpg" /></a>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>
<div class="container">
	<div class ="borderpilkas margin"> 
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<p class="h3">Paleiskim pavasarišką muziką garsiau, kad kiekviena diena skambėtų kaip darnus akordas!</p>
			</div>
			<div class="col-md-1">
			</div>
		</div>
	</div>
</div>
<div class="container straipsniai">
	<div class="row">
		<div class="col-md-4">
			<div class="card">
  				<img class="card-img-top" src="img/fotostraipsniams/kosmetine.jpg" alt="kosmetine">
  				<div class="card-body">
    				<h4 class="card-title">The standard Lorem</h4>
    				<p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua".</p>
    				<a href="greitasApsipirkimas.php" class="btn btn-primary margin">Užsisasyk</a>
  				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
					<img class="card-img-top" src="img/fotostraipsniams/parfum.jpg" alt="parfum">
					<div class="card-body">
					<h4 class="card-title">The standard Lorem</h4>
					<p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua".</p>
					<a href="gaminiai.php" class="btn btn-primary margin">Išsirink</a>
					</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
  				<img class="card-img-top" src="img/fotostraipsniams/seseliai.jpg" alt="seseliai">
  				<div class="card-body">
    				<h4 class="card-title">The standard Lorem</h4>
    				<p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua".</p>
    				<a href="grozioPatarimas.php" class="btn btn-primary margin">Atrask savo</a>
  				</div>
			</div>
		</div>
	</div>
</div>
<div class="container straipsniai">
	<div class="row">
		<div class="col-md-4">
			<div class="card">
					<img class="card-img-top" src="img/fotostraipsniams/nagai.jpg" alt="nagai">
					<div class="card-body">
					<h4 class="card-title">The standard Lorem</h4>
					<p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua".</p>
					<a href="greitasApsipirkimas.php" class="btn btn-primary margin">Išbandyk</a>
					</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
					<img class="card-img-top" src="img/fotostraipsniams/makeup.jpg" alt="laisvalaikis">
					<div class="card-body">
					<h4 class="card-title">The standard Lorem</h4>
					<p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua".</p>
					<a href="grozioPatarimas.php" class="btn btn-primary margin">Sužinok</a>
					</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
					<img class="card-img-top" src="img/fotostraipsniams/natural.jpg" alt="kosmetine">
					<div class="card-body">
					<h4 class="card-title">The standard Lorem</h4>
					<p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua".</p>
					<a href="greitasApsipirkimas.php" class="btn btn-primary margin">Užsisasyk</a>
					</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="antraste">
		<div class ="borderpilkas margin">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<p class="h3">Kiti klientai įsigijo šias prekes. Gal ir tau jos patiks.<a href="gaminiai.php"> Užsuk pasižiūrėti!</a></p>
				</div>
				<div class="col-md-1">
				</div>
			</div>
		</div>	
	</div>
</div>
<div class="container">
	<div class="row">
	<?php	while($row = mysqli_fetch_assoc($result)) { ?>
		<div class="col-md-3">
			<div class="card bg-light margin">
				<img src="img/<?php echo $row['img'] ?>" class="img-thumbnail" alt="kosmetinė"> 
				<h4 class="card-title"><?php echo $row['pavadinimas'] ?></h4>
				<span><s><?php echo number_format($row['senaKaina'] / 100, 2) ?> EUR</s></span>
				<span class="akcija"><?php echo number_format($row['kaina'] / 100, 2) ?> EUR</span>
			</div>
		</div>
	<?php } ?>
	</div>
</div>
<div class="container">
	<div class="margin">
		<div class="row">
			<div class="col-md-5">
				<div class="tabelpristatymas">
					<a href ="pasirinkkonsultanta.php">	
						<span>NORI GAUTI PRISTATYMĄ NEMOKAMAI?</span><br>
						<i class="fa fa-car"></i>
						<br>PASIRINK KONSULTANTĄ >>
					</a>
				</div>
			</div>
			<div class="col-md-2">
			</div>
			<a href ="grazinimopolitika.php">
				<div class="col-md-5 tabelpristatymas">
					<span>90 DIENŲ GRĄŽINIMO POLITIKA</span><br>
					<i class="fa fa-gift"></i>
					<br>SUŽINOK DAUGIAU >></a>
				</div>
			</div>
		</div>
	</div>
</div>
	<?php include('footer.php'); ?>
</body>

</html>