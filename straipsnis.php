<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>

<?php include('header.php'); ?>

<?php
$id = $_GET['id'];
$sql = "SELECT id, Pavadinimas, Antraste, Tekstas, kategorija FROM straipsmiai WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="straipsnis">
    <div class="container">
        <div class="col-md-2">
        </div>
        <div class="col-md-10">
            <p><?php echo $row['Antraste'] ?></p>
            <h2><?php echo $row['Pavadinimas'] ?></h2>
            <p><?php echo $row['Tekstas'] ?><p> <br>
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