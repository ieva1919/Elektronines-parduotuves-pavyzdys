<?php include('start.php') ?>
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>

<?php include('header.php'); ?>

<?php
$sql = "SELECT id, kaina, senaKaina, img, trumpasAprasymas, Gaminiokodas FROM gaminiai WHERE senakaina IS NOT NULL";
$result = mysqli_query($conn, $sql);
?>

    <div class="container gaminiai">
        <h2>Akcijiniai gaminiai:</h2>
        <?php include('gaminiusarasas.php'); ?>


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