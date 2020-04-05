<?php


function getBaseUrl() 
{
    $currentPath = $_SERVER['PHP_SELF']; 
    $pathInfo = pathinfo($currentPath); 
    $hostName = $_SERVER['HTTP_HOST']; 
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
    return $protocol.$hostName.$pathInfo['dirname']."/";
}

function getMenu($menuElement, $ulClass='', $liClass=''){
	$menuHTML =  "<ul class='menu-ul " . $ulClass . "'>";
		foreach($menuElement as $menu){
			if(empty($menu['submenu'])){
				$menuHTML .=  '<li class="' . $liClass . '"><a class="tran" href="' . $menu['clickUrl'] . '">' . strtolower($menu['label']) . '</a></li>';
			}else{
				$menuHTML .=  '<li class="' . $liClass . '"><span class="tran">' . strtolower($menu['label']) . '</span>' . getMenu($menu['submenu'],'sub-menu') . '</li>';
			}
		}
	$menuHTML .=  "</ul>";
	return $menuHTML;
}

function element($fileName,$variables = []){
	ob_start();
	extract($variables);
	if(strpos($fileName,'.php') === false){
		$fileName.='.php';
	}
	include(locate_template("elements/$fileName"));
	return ob_get_clean();
}

function getProducts($products, $filter = ''){
	$result = array_filter($products, function ($item) use ($filter) {
		if ((stripos($item['title'], $filter) !== false) ||
			(stripos($item['category'], $filter) !== false) ||
			(stripos($item['tags'], $filter) !== false) ||
			(similar_text($item['title'], $filter) > 2 || 
			similar_text($item['category'], $filter) > 2 || 
			similar_text($item['tags'], $filter) > 2 )) {
			return true;
		}
		return false;
	});

	return $result;
}