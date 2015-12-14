<?php

define('ROOT', dirname(dirname(__FILE__)));

require_once ROOT . '/vendor/Twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register(true);

$template = [
    'play_bar_desc' => '{% if try_time != 0 %}您可以免费试看{{try_time}}分钟，立即购买观看完整版{% endif %}',
    'product_desc' => '{{product_name}}专享片库，开通会员免费看',
    'buy_link' => 'http://m.vip.youku.com/index.php?c=embed&a=pay_mon',
    'buy_desc' => '开通',
    'ext_buy_link' => '',
    'ext_buy_desc' => '',
    'service_desc' => '',
    'tab_ext_desc' => '',
    'qrcodeid_link' => '',
];

$loader = new Twig_Loader_Array($template);
$twig = new Twig_Environment($loader);

$params = [
    'try_time' => 0,
    'product_name' => '黄金会员',
];

$result = [];
foreach ($template as $key => $value) {
    $result[$key] = $twig->render($key , $params);
}

var_dump($result);