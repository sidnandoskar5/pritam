<?php include_once('./header.php'); ?>
<?php
$filter = $_GET['s'];
$productList = getProducts($products, $filter);
$newProducts = array_slice($products,0,6);
$bestSellers = array_slice($products,6,2);
?>

<section class="container pos-rel">
    <div class="left-wrapp">
        <?php if(!empty($bestSellers)): ?>
        <div class="best-seller">
            <div class="sec-title">Best Sellers</div>
            <div class="row">
                <?php foreach($bestSellers as $product): ?>
                    <div class="col-md-12">
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
    <div class="right-wrapp">
        <?php if(!empty($productList)): ?>
        <div class="search-product">
            <div class="sec-title">Search Results</div>
            <div class="row">
                <?php foreach($productList as $product): ?>
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
        <?php else: ?>
        <h2 class="no-results">Product you are looking for is not availabe. Please try something else.</h2>
        <?php endif; ?>
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