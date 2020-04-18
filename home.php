<?php
$banners = [
    [
        'bannerClass' => '',
        'bannerImg' => 'mac.jpg',
        'clickUrl' => '#',
        'bannertext' => [
            'textBig' => '',
            'highlight' => 'Mac',
            'textSmall' => '',
            'textMini' => 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia.'
        ]
    ],
    [
        'bannerClass' => '',
        'bannerImg' => 'speaker.jpg',
        'clickUrl' => '#',
        'bannertext' => [
            'textBig' => 'cenas tristiq lue orci ac sem',
            'highlight' => 'Speaker',
            'textSmall' => 'Lorem ipsum dolor sit  amet consectetuer',
            'textMini' => 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia.'
        ]
    ],
    [
        'bannerClass' => '',
        'bannerImg' => 'tab.jpg',
        'clickUrl' => '#',
        'bannertext' => [
            'textBig' => 'cenas tristiq lue orci ac sem',
            'highlight' => 'iPad',
            'textSmall' => 'Lorem ipsum dolor sit  amet consectetuer',
            'textMini' => 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia.'
        ]
    ]
];

$newProducts = array_slice($products,0,6);
$bestSellers = array_slice($products,6,2);
?>

<section class="home">
    <div class="container pos-rel">
        <div class="hero-banner">
            <ul id="hero-banner-slider">
                <?php foreach($banners as $banner): ?>
                    <li>
                        <a class="disp-b clearfix pos-rel" href="<?php echo $banner['clickUrl'] ?>">
                            <div class="img-wrapper">
                                <img src="<?php echo  $imgPath . $banner['bannerImg']; ?>" />
                            </div>
                            <div class="content-wrapper">
                                <div class="text-big"><?php echo $banner['bannertext']['textBig']; ?></div>
                                <div class="high-light"><?php echo $banner['bannertext']['highlight']; ?></div>
                                <div class="text-small"><?php echo $banner['bannertext']['textSmall']; ?></div>
                                <div class="text-mini"><?php echo $banner['bannertext']['textMini']; ?></div>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="clearfix">
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
                <div class="clearfix category-banners">
                    <a class="disp-b category-banner-el pull-left" href="#">
                        <div class="content-wrapp">
                        <div class="title-lg">Clearance</div>
                        <div class="title-md">Get up to 25% off</div>
                        <div class="title-sm">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia.</div>
                        </div>
                    </a>
                    <a class="disp-b category-banner-el category-banner-el-blue pull-left" href="#">
                        <div class="content-wrapp">
                        <div class="title-lg">Free Shipping</div>
                        <div class="title-md">on orders over $99</div>
                        <div class="title-sm">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia.</div>
                        </div>
                    </a>
                </div>
                <?php if(!empty($newProducts)): ?>
                <div class="new-product">
                    <div class="sec-title">New Products</div>
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
        </div>
    </div>
</section>