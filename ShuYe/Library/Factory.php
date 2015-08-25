<?php
/**
* @filename Factory.php
* @touch 2015-8-14下午9:55:41
* @package php
* @author SuperShuYe
* @license http://www.supershuye.com
* @version 1.0.0
* @copyright (c) 2015-8-14, SuperShuYe
*/
namespace ShuYe\Library;

/**
 * 工厂对象
 * 
 * @author supershuye
 *        
 */
class Factory
{

    /**
     * 创建路由对象
     */
    public static function CreateRouter()
    {
        $router = Register::get('router');
        
        if ($router == false) {
            $router = Router::getInstance();
            Register::set('router', $router);
        }
        
        return $router;
    }

    /**
     * 创建数据库对象
     *
     * @param array $confg
     *            配置数组
     * @return \ShuYe\Library\Db\MySql
     */
    public static function CreateDb($config)
    {
        $db = Register::get('db');
        
        if ($db == false) {
            $db = \ShuYe\Library\Db\MySql::getInstance($config);
            Register::set('db', $db);
        }
        
        return $db;
    }
}