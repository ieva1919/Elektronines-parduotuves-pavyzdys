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
WHERE rekomendacijospirkejui.id = 1 
LIMIT 4"; 
$result = mysqli_query($conn, $sql);
?>
<div class="container text-center">
    <div class="margin">
        <div class="row">
            <h3>Mano mėgstamiausi</h3>
        </div>
        <hr>
        <div class="row">
                <h5>Jūsų mėgstamiausių gaminių sąrašas tuščias. Ar jau matėte mano siūlomus <a href="gaminiai.php">gaminius?</a></h5>
        </div>
        <hr>
        <div class="row">
            <a href="gaminiai.php" class="btn btn-primary margin">Pradėti apsipirkimą >></a>
        </div>
    </div>
	<div class ="borderpilkas">
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<p class="h3">Nepraleisk progos įsigyti!</p>
			</div>
			<div class="col-md-1">
			</div>
		</div>
	</div>	
	<div class="margin">
		<div class="row">
		<?php	while($row = mysqli_fetch_assoc($result)) { ?>
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
<div class="container">
    <div class="atgal">
        <div class="row">
        	<div class="col-md-3">
				<button class="btn btn-link" onclick="back()">Atgal</button>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
</body>
</html>