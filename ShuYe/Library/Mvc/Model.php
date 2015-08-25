<?php
/**
* @filename Model.php
* @touch 2015-8-24下午10:56:20
* @package php
* @author SuperShuYe
* @license http://www.supershuye.com
* @version 1.0.0
* @copyright (c) 2015-8-24, SuperShuYe
*/
namespace ShuYe\Library\Mvc;

use ShuYe\Library\Register;

class Model
{

    protected $dbclass;

    protected $table;

    protected $where;

    public function __construct()
    {
        $this->dbclass = Register::get('db');
    }

    protected function table($table)
    {
        $this->table = $table;
        return $this;
    }

    protected function where($where)
    {
        $this->where = $where;
        return $this;
    }

    protected function find()
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE " . $this->where;
        return $this->dbclass->getOne($sql);
    }

    protected function select()
    {
        if (empty($this->where)) {
            $sql = "SELECT * FROM " . $this->table;
        } else {
            $sql = "SELECT * FROM " . $this->table . " WHERE " . $this->where;
        }
        return $this->dbclass->getAll($sql);
    }
}