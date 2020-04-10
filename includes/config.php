<?php
include_once('functions.php');

global $response;
global $root_dir;
global $cssPath;
global $jsPath;
global $imgPath;

$baseURL = getBaseUrl();
$cssPath = $baseURL . 'assets/css/';
$jsPath = $baseURL . 'assets/js/';
$imgPath = $baseURL . 'assets/img/';

$response = [
    'site' => [
        'sitename' => ['computer','shopper'],
        'logo' => 'SC1.JPEG',
        'favicon' => '',
        'siteurl' => '/',
        'siteTitle' => 'Computer Shopper',
        'siteInitials' => 'cs'
    ],
    'assets' => [
        'js' => [
            'jquery.min.js',
            'slick.min.js',
            'main.js',
        ],
        'css' => [
            'bootstrap.css',
            'slick.css',
            'style.css',
        ],
    ],
    'menu' => [
        [
            'label' => 'home',
            'clickUrl' => '/',
        ],
        [
            'label' => 'About Us',
            'clickUrl' => '#'
        ],
        [
            'label' => 'Contact Us',
            'clickUrl' => '#'
        ],
    ],
];