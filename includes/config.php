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
        'sitename' => ['Siddhesh','Computer'],
        'logo' => '00.png',
        'favicon' => '',
        'siteurl' => '/',
        'siteTitle' => 'Siddhesh Computer',
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
            'clickUrl' => '/about.php'
        ],
        [
            'label' => 'Contact Us',
            'clickUrl' => '/contact.php'
        ],
    ],
];