<?php
/**
* @filename View.php
* @touch 2015-8-18下午10:40:56
* @package php
* @author SuperShuYe
* @license http://www.supershuye.com
* @version 1.0.0
* @copyright (c) 2015-8-18, SuperShuYe
*/

namespace ShuYe\Library\Mvc;

class View{
    /**
     * 模板输出变量
     * @var tVar
     * @access protected
     */
    protected $tVar     =   array();
    
    /**
     * 模板变量赋值
     * @access public
     * @param mixed $name
     * @param mixed $value
     */
    public function assign($name,$value=''){
        if(is_array($name)) {
            $this->tVar   =  array_merge($this->tVar,$name);
        }else {
            $this->tVar[$name] = $value;
        }
    }
    
    /**
     * 模板显示
     * @param string $file
     */
    public function display($file) {
        extract($this->tVar, EXTR_OVERWRITE);
        include APP_PATH.'/'._MODEL_.'/View/'.$file.'.php';
    }
}