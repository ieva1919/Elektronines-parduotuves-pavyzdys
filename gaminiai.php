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

$no_of_records_per_page = 9;
$offset = ($pageno-1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM gaminiai" . $where;
$result = mysqli_query($conn, $total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql = "SELECT id, kaina, senaKaina, img, trumpasAprasymas, Gaminiokodas FROM gaminiai" . $where . " LIMIT $offset, $no_of_records_per_page";

$result = mysqli_query($conn, $sql);

?>

    <div class="container gaminiai">
        <h2>Siūlomi gaminiai:</h2>
        <?php include('gaminiusarasas.php'); ?>

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