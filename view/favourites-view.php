
<div id="information" class="shadow">
<h2>Favourites</h2>
    <?php
    function formatPhone($num) {
        if(  preg_match( '/^(\d{3})(\d{3})(\d{4})$/', $num,  $matches ) )
        {
            $result = $matches[1] . '-' .$matches[2] . '-' . $matches[3];
            return $result;
        } else {
            return $num;
        }
    }
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
                            <p><strong>Phone: </strong><?php echo formatPhone($res[$itr]['phone']); ?></p>
                        </div>
                        <div class="panel-more1 pull-right">
                            <form action="favourite.php" method="post">
                            <button class="btn btn-primary button" type="submit" name="remove-Fav" value="<?php echo $res[$itr]['name']; ?>">Remove Favorite
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $itr++;
    }

    if (isset($_POST['remove-Fav'])) {
        $this->usrsrv->delUFav($_POST['remove-Fav']);
        echo '<script>parent.window.location.reload();</script>';
    }

    ?>
</div>  <!-- Information Div Ends -->4
