<?php include_once('./header.php'); ?>
<?php
$id = $_GET['id'];
$mainProduct = getProductsDetails($products, $id);
$newProducts = array_slice($products,0,6);

?>
<section class='detail-page'>
    <div class="container">
        <?php if(!empty($mainProduct)){ ?>
        <div class="main-product clearfix">
            <div class="img-wrapper">
                <img src="<?php echo $imgPath . $mainProduct[0]['img'] ?>" alt="<?php echo $mainProduct[0]['title']; ?>" class="img-responsive">
            </div>
            <div class="content-wrapper">
                <div class="title"><?php echo $mainProduct[0]['title']; ?></div>
                <div class="description">
                    <?php foreach($mainProduct[0]['description'] as $data){
                        echo "<p class='desc'>".$data."</p>";
                    } ?>
                </div>
                <div class="price"><?php echo $mainProduct[0]['sellPrice']; ?></div>
            </div>
        </div>
        <?php }else{ ?>
            <h2 class="no-results">Product details are not available. Please try something else.</h2>
        <?php } ?>
        <?php if(!empty($newProducts)): ?>
            <div class="new-product">
                <div class="sec-title">Related Products</div>
                <div class="row">
                    <?php foreach($newProducts as $product): ?>
                        <div class="col-md-4 div col-sm-6">
                            <a class="product-card disp-b" href='<?php echo $product['clickUrl']; ?>'>
                                <div class="img-wrapper">
                                    <img src="<?php echo $imgPath . $product['img'] ?>" alt="<?php echo $product['title']; ?>" class="img-responsive">
                                </div>
                                <div class="content-wrapper">
                                    <div class="title"><?php echo $product['title']; ?></div>
                                    <div class="price">
                                        <span class="og-price"><?php //echo $product['originalPrice']; ?></span>
                                        <span class="sell-price"><?php echo $product['sellPrice']; ?></span>
                                    </div>
                                    <div class="cta tran">Buy Now</div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php include_once('./footer.php'); ?>