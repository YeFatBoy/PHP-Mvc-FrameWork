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
}