<?php
/**
* @filename UserModel.php
* @touch 2015-8-18下午10:52:39
* @package php
* @author SuperShuYe
* @license http://www.supershuye.com
* @version 1.0.0
* @copyright (c) 2015-8-18, SuperShuYe
*/
namespace Home\Model;

use ShuYe\Library\Mvc\Model;

class UserModel extends Model
{

    public function getList()
    {
       return $this->table('ecs_admin_user')->select();
    }
}