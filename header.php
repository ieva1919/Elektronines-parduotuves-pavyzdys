<div class="title-jumbotron">
	<div class="container">
		<div class = "header">
			<div class="row position">
				<div class="col-md-4">
					<span> <a href ="gaminiai.php"> APSIPIRK ir pasinaudok Ievos patarimais </span> </a>
				</div>
				<div class="col-md-4">
					<span class = "prisijunk"> <a href ="#">SUŽINOK APIE Ievos Beauty</span></a>
				</div>
				<div class="col-md-4 pull-right">
					<span class = "prisijunk"> <a href ="#">Prisijungti/ Užsiregistruoti</a></span>
				</div>
			</div>
			<div class="row margin">
				<div class="col-md-4">
				<a href ="index.php"><img src = "img/logotipas2.jpg" /></a>
				</div>
				<div class="col-md-5">
						<div class="input-group mb-3 search">
							<input type="text" placeholder="Gaminio pavadinimas/kodas">
							<a href="#" target="_blank"><i class="fa fa-search"></i></a>
						</div>
					</form>
				</div>
				<div class="col-md-1">
					<a href="#" target="_blank"><i class="fa fa-shopping-bag"></i></a>
				</div>
				<div class="col-md-2 margintop">
					<span class = "prisijunk"> <a href ="megstamiausi.php">MĖGSTAMIAUSI ></a></span>
					<a href="prekiukrepselis.php">Prekių krepšelis > </a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
$sql = "SELECT id, pavadinimas FROM kategorijos";
$result = mysqli_query($conn, $sql);

?>

<div class="title-jumbotron">
	<div class="container">
		<ul class="list-inline menu">
			<li class="list-inline-item"><a href ="gaminiai.php">GAMINIAI</a></li>
			<li class="list-inline-item"><a href ="greitasApsipirkimas.php">GREITAS APSIPIRKIMAS</a></li>
			<li class="list-inline-item"><a href ="akcijos.php">AKCIJOS</a></li>
			<li class="list-inline-item"><a href ="grozioPatarimas.php">GROŽIO PATARIMAI</a></li>
		</ul>
		<ul class="list-inline menu-pagrindinis">

		<?php	while($row = mysqli_fetch_assoc($result)) { ?>

			<li class="list-inline-item text-uppercase"><a href ="/gaminiai.php?id=<?php echo $row['id'] ?>"><?php echo $row["pavadinimas"] ?></a></li>

		<?php } ?>

		</ul>
	</div>
</div>
