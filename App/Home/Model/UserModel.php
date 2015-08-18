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

class UserModel{
    
    public function getList(){
        
        return [
            '0' => [
                'name' => 'SuperShuYe',
                'email' => '98341673@qq.com'
            ],
            
            '1' => [
                'name' => 'Rosy',
                'email' => '98341673@qq.com'
            ],
        ];
        
    }
    
}