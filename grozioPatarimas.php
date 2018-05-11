<?php include('start.php') ?>
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>

	<?php include('header.php'); ?>

	<?php

	if (isset($_GET['pageno'])) {
		$pageno = $_GET['pageno'];
	} else {
		$pageno = 1;
	}
	if(isset( $_GET['id'])) {
		$id = $_GET['id'];
		$cat = "&id=$id";
		$where = " WHERE kategorija = $id";
	} else {
		$where = "";
		$cat = "";
	}

	$no_of_records_per_page = 6;
	$offset = ($pageno-1) * $no_of_records_per_page;

	$total_pages_sql = "SELECT COUNT(*) FROM straipsmiai" . $where;
	$result = mysqli_query($conn, $total_pages_sql);
	$total_rows = mysqli_fetch_array($result)[0];
	$total_pages = ceil($total_rows / $no_of_records_per_page);


	$sql = "SELECT id, Pavadinimas, img, antraste, istrauka FROM straipsmiai" . $where . " LIMIT $offset, $no_of_records_per_page";

	$straipsniai = mysqli_query($conn, $sql);




	$sql = "SELECT id, Pavadinimas FROM stratipsniukategorijos";
	$result = mysqli_query($conn, $sql);

	// if(isset( $_GET['id'])) {
	// 	$id = $_GET['id']; //specialusis php masyvas, kuris kartu su adresu perduoda kintamuju masyva
	// 	$sql = "SELECT id, Pavadinimas, img, antraste, istrauka FROM straipsmiai WHERE kategorija = $id";
	// } else {
	// 	$sql = "SELECT id, Pavadinimas, img, antraste, istrauka FROM straipsmiai";
	// }
	// $straipsniai = mysqli_query($conn, $sql);

	?>

	<?php //  if (!$straipsniai) { printf("Error: %s\n", mysqli_error($conn)); exit(); } ?>

	<div class="container">
		<div class="groziopatarimai">
			<div class="row">
				<div class="col-md-2 text-left">
					<ul class="list-inline text-left"> <h3> Straipsnių kategorijos: </h3>

					<?php	while($row = mysqli_fetch_assoc($result)) { ?>
						<li class="list-inline-item"><a href ="grozioPatarimas.php?id=<?php echo $row['id'] ?>"><?php echo $row['Pavadinimas'] ?></a></li>
					<?php } ?>

					</ul>
				</div>
				<div class="col-md-10">
					<div class="row">
					<?php while($row = mysqli_fetch_assoc($straipsniai)) { ?>
						<div class="col-md-6">
							<div class="height">
							<a href ="straipsnis.php?id=<?php echo $row['id'] ?>"><img src="img/<?php echo $row['img'] ?>" class="img-thumbnail" alt="straipsnio nuotrauka"></a>
								<div class="card-body">
									<h4 class="card-title"><?php echo $row['Pavadinimas'] ?></h4>
									<p><?php echo $row['antraste'] ?></p>
									<p class="card-text"><?php echo $row['istrauka'] ?> <a href="#">Skaitykite toliau>></a></p>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>

        <ul class="pagination">
            <li><a href="?pageno=1<?php echo $cat ?>">1</a></li>
            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1) . $cat; } ?>">Sekantis</a>
            </li>
            <li><a href="?pageno=<?php echo $total_pages . $cat; ?>">Paskutinis</a></li>
        </ul>



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