
<div id="information" class="shadow">
    <?php
    $res = $this->usrsrv->getUFav();
    $length = count($res);
    $itr = 0;
    if ($length === 0) {
        echo 'No Favourites On File!';
    }
    while($itr < $length) {

        ?>
        <div class="row">
            <div class="container col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <p class="panel-heading" align="center"><strong><?php echo $res[$itr]['name'] ?></strong></p>
                    <div class="panel-body">
                        <div class="panel-info">
                            <p><strong>Address: </strong><?php echo $res[$itr]['address'] ?></p>
                            <p><strong>Phone: </strong><?php echo $res[$itr]['phone'] ?></p>
                        </div>
                        <div class="panel-more1 pull-right">
                            <button class="btn btn-primary button" type="submit" name="remove-Fav" value="<?php echo $res[$itr]['name']; ?>">Remove Favorite
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $itr++;
    }
    ?>
</div>  <!-- Information Div Ends -->