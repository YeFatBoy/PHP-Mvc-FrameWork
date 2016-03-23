<?php
/**
* @filename Router.php
* @touch 2015-8-14下午10:00:12
* @package php
* @author SuperShuYe
* @license http://www.supershuye.com
* @version 1.0.0
* @copyright (c) 2015-8-14, SuperShuYe
*/
namespace ShuYe\Library;

/**
 * 路由对象
 * @author supershuye
 *
 */
class Router
{
    
    /**
     * 路由对象
     */
    protected static $r;
    
    public function __construct(){
        $this->setRouter();
    }
    
    /**
     * 单例对象模式
     * @return \ShuYe\Router
     */
    public static function getInstance()
    {
        if (! isset(self::$r)) {
            self::$r = new Router();
        }
        return self::$r;
    }
    
    /**
     * 设置路由
     */
    public function setRouter(){
        
        $script_name = $_SERVER['SCRIPT_NAME'];
        $php_self = $_SERVER['REQUEST_URI'];
                
        if ($script_name == $php_self){
            $url = array(
                'Model' => 'Home',
                'Controller' => 'IndexController',
                'Method' => 'index',
            );
        }
        else{
            $url_data  = str_replace($script_name, '', $php_self);
            $data = explode('/', $url_data);
            
            $url_model = !empty($data['1']) ? $data['1'] : 'Home';
            $url_controller = !empty($data['2']) ? $data['2'].'Controller' : 'IndexController';
            $url_method = !empty($data['3']) ? $data['3'] : 'index';
            
            $url = array(
                'Model' => $url_model,
                'Controller' => $url_controller,
                'Method' => $url_method,
            );
        }
        //定义当前模块
        define('_MODEL_', $url['Model']);
        
        $class = '\\'.$url['Model']."\\Controller\\".$url['Controller'];
        $obj = new $class();
        $obj->$url['Method']();
    }
    
}
