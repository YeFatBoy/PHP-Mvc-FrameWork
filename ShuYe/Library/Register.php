<?php
/**
* @filename Register.php
* @touch 2015-8-14下午9:55:55
* @package php
* @author SuperShuYe
* @license http://www.supershuye.com
* @version 1.0.0
* @copyright (c) 2015-8-14, SuperShuYe
*/

namespace ShuYe\Library;

/**
 * 注册树模式
 * @author supershuye
 *
 */
class Register
{
    
    /**
     * 注册对象
     * @var unknown
     */
    private static $regs = array();
    
    /**
     * 设置对象数组
     * @param string $key
     * @param string $value
     */
    public static function set($key, $value)
    {
        self::$regs[$key] = $value;
    }
    
    /**
     * 获得对象数组
     * @param string $key
     * @return boolean
     */
    public static function get($key)
    {
        if (! isset(self::$regs[$key])) {
            return false;
        }

        return self::$regs[$key];
    }
    
    /**
     * 销毁对象
     * @param string $key
     */
    public static function _unset($key)
    {
        unset(self::$regs[$key]);
    }
}