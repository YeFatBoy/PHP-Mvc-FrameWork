<?php
/**
* @filename Loader.php
* @touch 2015-8-13下午10:59:56
* @package php
* @author SuperShuYe
* @license http://www.supershuye.com
* @version 1.0.0
* @copyright (c) 2015-8-13, SuperShuYe
*/
namespace ShuYe;

class Loader
{

    /**
     * 自动加载文件
     *
     * @param string $class            
     */
    public static function autoload($class)
    {
        
        // 文件链接有相同的命名空间,所以去掉了一个
        $base_dir = str_replace(__NAMESPACE__, '', BASEDIR);
        
        if (strrpos($class, __NAMESPACE__) === false) {
            $class = str_replace('./', '', APP_PATH) . '/' . $class;
        }
        
        $file = $base_dir . str_replace("\\", "/", $class) . '.php';
        
        if (file_exists($file)) {
            require_once $file;
        } else {
            die( $class.' file not find');
        }
    }
}