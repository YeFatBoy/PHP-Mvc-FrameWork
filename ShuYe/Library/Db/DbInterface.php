<?php
/**
* @filename DbInterface.php
* @touch 2015-8-23下午9:35:40
* @package php
* @author SuperShuYe
* @license http://www.supershuye.com
* @version 1.0.0
* @copyright (c) 2015-8-23, SuperShuYe
*/
namespace ShuYe\Library\Db;

interface DbInterface
{
    
    /**
     * 数据库链接
     * @param array $config
     */
    public function connect($config);
    
    /**
     * 执行sql语句
     * @param string $sql
     */
    public function query($sql);
    
    /**
     * 获得全部数据
     * @param string $sql
     */
    public function getAll($sql);
    
    /**
     * 获得一条数据
     * @param string $sql
     */
    public function getOne($sql);
    
    /**
     * 关闭数据库链接
     */
    public function close();
}

