<?php
function getMenuActive($item)
{
    $requestUri = $_SERVER['REQUEST_URI'];

    if ($requestUri == '/') {
        $requestUri = 'home';
    }

    if (strContain($requestUri, 'v-blog')) {
        $requestUri = 'post';
    }

    echo strContain($requestUri, $item) ? "active" : "";
}

function assets($path = '')
{
    $http = isset($_SERVER['HTTPS']) ? "https://" : "http://";
    echo $http . $_SERVER['HTTP_HOST'] . "/" . ltrim($path, '/');
}

function loadIconNumber($number)
{
    echo
        '<span class="fa-stack">
           <i class="fa fa-circle fa-stack-2x"></i>
           <strong class="fa-stack-1x text-white">' . $number . '</strong>             
        </span>';
}

function getMeta($value = '', $default = '')
{
    echo empty($value) ? $default : $value;
}

function strContain($str, $needle)
{
    return strpos($str, $needle) !== false;
}