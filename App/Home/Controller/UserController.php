<?php
/**
* @filename UserController.php
* @touch 2015-8-18下午10:51:50
* @package php
* @author SuperShuYe
* @license http://www.supershuye.com
* @version 1.0.0
* @copyright (c) 2015-8-18, SuperShuYe
*/

namespace Home\Controller;

use ShuYe\Library\Mvc\Controller;

class UserController extends Controller{

    public function index(){
        $this->assign('list',$this->model('UserModel')->getList());
        $this->display('User');
    }
}