<?php
    include_once('./includes/config.php');
    include_once('./includes/products.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $response['site']['siteTitle']; ?></title>
    <link rel="shortcut icon" href="<?php echo  $imgPath . $response['site']['favicon']; ?>" />
    <?php foreach($response['assets']['css'] as $css): ?>
        <link rel="stylesheet" href="<?php echo  $cssPath . $css; ?>">
    <?php endforeach; ?>
</head>
<body>
<header class="header">
    <div class="container pos-rel">
        <h1 class="logo">
            <a class="disp-b" href="/" title="<?php echo $response['site']['siteTitle']; ?>">
                <img src="<?php echo  $imgPath . $response['site']['logo']; ?>" />
            </a>
        </h1>
        <form action="/category/" class="search-form" method="get" autocomplete="off">
            <input type="text" class="search-input" placeholder="search" name="s" value="" required />
            <input type="submit" class="search-submit" value="" />
        </form>
    </div>
</header>
<nav class="nav-menu">
    <div class="container">
        <?php echo getMenu($response['menu'],'main-menu'); ?>
    </div>
</nav>