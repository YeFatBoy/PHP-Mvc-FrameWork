<?php

/**
* @filename Init.php
* @touch 2015-8-14下午9:49:47
* @package php
* @author SuperShuYe
* @license http://www.supershuye.com
* @version 1.0.0
* @copyright (c) 2015-8-14, SuperShuYe
*/

namespace ShuYe;

//定义常量
define('BASEDIR', __DIR__);

//自动加载文件
include BASEDIR.'/Loader.php';
spl_autoload_register('ShuYe\Loader::autoload');

//自动加载配置文件
$config = new \ShuYe\Library\Config('/Config');

//加载路由
\ShuYe\Library\Factory::CreateRouter();


