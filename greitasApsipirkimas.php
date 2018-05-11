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


<div class="container">
    <div class="greitasApsiirkimas">
        <div class="row">
            <div class="col-md-3">
                <img src="img/pic.jpg"/>
                <a href="#" class="btn btn-primary">Į krepšelį</a>
            </div>
            <div class="col-md-9">
                <h2>Pirkti pagal gaminio kodą</h2>
                <p>Apsipirkite įvesdami vienos raidės ir 4 skaitmenų gaminio kodą nurodydami pageidaujamą jo kiekį. Tuomet paspauskite mygtuką „Į krepšelį“. </p>
            </div>
        </div>
        <div class="row"> 
                <div class="col-md-6">
                    <table>
                        <tr>
                            <th>GAMINIO KODAS</th>
                            <th>KIEKIS</th>
                            <th>Į KREPŠELĮ</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group mb-3 search">
                                    <input type="text" placeholder="Norėdami užsisakyti įveskite gaminio skaitmeninį kodą">
                                    <a href="#" target="_blank"><i class="fa fa-search"></i></a>
                                </div></td>
                            <td>
                                <div class="input-group mb-3 search qtyupanddown">
                                    <input type="number" placeholder="1">
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Į krepšelį</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group mb-3 search">
                                    <input type="text" placeholder="Norėdami užsisakyti įveskite gaminio skaitmeninį kodą">
                                    <a href="#" target="_blank"><i class="fa fa-search"></i></a>
                                </div></td>
                            <td>
                                <div class="input-group mb-3 search qtyupanddown">
                                    <input type="number" placeholder="1">
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Į krepšelį</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group mb-3 search">
                                    <input type="text" placeholder="Norėdami užsisakyti įveskite gaminio skaitmeninį kodą">
                                    <a href="#" target="_blank"><i class="fa fa-search"></i></a>
                                </div></td>
                            <td>
                                <div class="input-group mb-3 search qtyupanddown">
                                    <input type="number" placeholder="1">
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Į krepšelį</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group mb-3 search">
                                    <input type="text" placeholder="Norėdami užsisakyti įveskite gaminio skaitmeninį kodą">
                                    <a href="#" target="_blank"><i class="fa fa-search"></i></a>
                                </div></td>
                            <td>
                                <div class="input-group mb-3 search qtyupanddown">
                                    <input type="number" placeholder="1">
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Į krepšelį</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group mb-3 search">
                                    <input type="text" placeholder="Norėdami užsisakyti įveskite gaminio skaitmeninį kodą">
                                    <a href="#" target="_blank"><i class="fa fa-search"></i></a>
                                </div></td>
                            <td>
                                <div class="input-group mb-3 search qtyupanddown">
                                    <input type="number" placeholder="1">
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Į krepšelį</a>
                            </td>
                        </tr>
                    </table>
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

<div class="container">
    <div class="margin">
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
    </div>
    <div class="container straipsniai">
        <div class="margin">
            <div class="row">
                <?php	while($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-md-3">
                        <div class="card bg-light">
                            <img src="img/<?php echo $row['img'] ?>" class="img-thumbnail" alt="kosmetinė"> 
                            <h4 class="card-title"><?php echo $row['pavadinimas'] ?></h4>
                            <span><s><?php echo number_format($row['senaKaina'] / 100, 2) ?></s></span>
                            <span class="akcija"><?php echo number_format($row['kaina'] / 100, 2) ?> EUR</span>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
</body>
</html>