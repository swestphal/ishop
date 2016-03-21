<?php
require_once("../resources/config.php");
require_once("../resources/functions.php");
include_once(TEMPLATE_FRONT . "header.php");; ?>

    <!-- Page Content -->
    <div class="container">

    <div class="row">

<? include_once(TEMPLATE_FRONT . "side_nav.php"); ?>

    <div class="col-md-9">

<?php include_once(TEMPLATE_FRONT . "main_slider.php"); ?>

    <div class="row">



<?php $products = get_products();
if ($products) {
    foreach ($products as $product) {; ?>
            <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
            <a href="item.php?id=<?php echo $product['product_id'];?>"><img src="<?php echo $product['product_img'];?>" alt=""></a>
            <div class="caption">
                <h4 class="pull-right"><?php echo $product['product_price'];?> &#8364;</h4>
                <h4><a href="item.php?id=<?php echo $product['product_id'];?>"><?php echo $product['product_title'];?></a>
                </h4>
                <p><?php echo $product['product_description'];?></p>
            </div>
            <div class="ratings">
                <p class="pull-right">15 reviews</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                </p>
            </div>
            <div class="buy_now">
                <a class="btn btn-primary" role="button" target="_blank"
                   href="item.php?id=<?php echo $product['product_id'];?>">In den Warenkorb</a>
            </div>
        </div> </div>
        <?php }};?>

        </div>


        </div>



        </div>

        </div>

        </div>

        </div>
        <!-- /.container -->

        <?php include_once(TEMPLATE_FRONT . "footer.php"); ?>