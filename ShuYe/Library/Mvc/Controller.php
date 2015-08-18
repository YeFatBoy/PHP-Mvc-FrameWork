<?php
/**
* @filename Controller.php
* @touch 2015-8-18下午10:40:46
* @package php
* @author SuperShuYe
* @license http://www.supershuye.com
* @version 1.0.0
* @copyright (c) 2015-8-18, SuperShuYe
*/

namespace ShuYe\Library\Mvc;

class Controller{

    /**
     * 视图实例对象
     * @var view
     * @access protected
     */
    protected $view     =  null;
    
    /**
     * 架构函数 取得模板对象实例
     * @access public
     */
    public function __construct() {
        //实例化视图类
        $this->view     = new View();

    }
    
    /**
     * 模板变量赋值
     * @access protected
     * @param mixed $name 要显示的模板变量
     * @param mixed $value 变量的值
     * @return Action
     */
    protected function assign($name,$value='') {
        $this->view->assign($name,$value);
        return $this;
    }
    
    /**
     * 模板显示
     * @param string $file
     */
    protected function display($file) {
        $this->view->display($file);
    }
}