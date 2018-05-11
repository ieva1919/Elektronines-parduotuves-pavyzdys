<div class="row">

<?php while($row = mysqli_fetch_assoc($result)) { ?>

    <div class="col-md-4 text-center gaminys">
        <div class="card bg-light">
            <a href ="gaminys.php?id=<?php echo $row['id'] ?>"><img src="img/<?php echo $row['img'] ?>" class="img-thumbnail" alt="glass"></a>
            <div class="input-group mb-3 search qtyupanddown">
                <span class="akcija "><?php echo number_format($row['kaina'] / 100, 2) ?> EUR</span>
                <?php
                if ($row['senaKaina'] != 0) { ?>
                <span> <del><?php echo number_format($row['senaKaina'] / 100, 2) ?></del> EUR</span>
                <?php } ?>
                <input type="number" min="1" class="count" value="1">
            </div>
        </div>
        <div>
            <span>Gaminio kodas: <?php echo $row['Gaminiokodas'] ?></span>
            <button type="button" class="btn btn-primary add-to-cart" data-product="<?php echo $row['id'] ?>">Dėti į krepšelį</button>
        </div>
        <div class="">
            <h4 class="card-title"><?php echo $row['trumpasAprasymas'] ?></h4>
        </div>
    </div>

<?php } ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Prekių krepšelis</h4>
      </div>
      <div class="modal-body">
        <h3 class="text-center">Pasirinkta prekė įtraukta į krepšelį</h3>
      </div>
      <div class="modal-footer">
        <div class="row">
        <div class="col-md-4">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tęsti prekių paiešką</button>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <a href="prekiukrepselis.php"><button type="button" class="btn btn-primary">Pirkti > </a></button>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>