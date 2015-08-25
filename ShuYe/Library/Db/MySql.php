<?php
/**
* @filename MySql.php
* @touch 2015-8-25上午1:06:28
* @package php
* @author SuperShuYe
* @license http://www.supershuye.com
* @version 1.0.0
* @copyright (c) 2015-8-25, SuperShuYe
*/
namespace ShuYe\Library\Db;

class MySql implements DbInterface
{

    public $conn;
    protected static $obj;

    public function __construct($config)
    {
        $this->connect($config);
    }
    
    /**
     * 单例数据库对象
     * 
     * @param array $config
     * @return \ShuYe\Library\Db\MySql
     */
    public static function getInstance($config){
        if (! isset(self::$obj)) {
            self::$obj = new MySql($config);
        }
        return self::$obj;
    }

    /**
     * 数据库链接
     *
     * @param array $config            
     */
    public function connect($config)
    {
        $this->conn = mysql_connect($config['host'], $config['username'], $config['password']);
        
        if (! $this->conn) {
            die(mysql_error($this->conn));
        } else {
            mysql_select_db($config['database']);
            mysql_set_charset('utf8');
        }
    }

    /**
     * 执行sql语句
     *
     * @param string $sql            
     */
    public function query($sql)
    {
        return mysql_query($sql);
    }

    /**
     * 获得全部数据
     *
     * @param string $sql            
     */
    public function getAll($sql)
    {
        $list = array();
        $result = $this->query($sql);
        if (mysql_num_rows($result) > 0) {
            while ($data = mysql_fetch_assoc($result)) {
                $list[] = $data;
            }
            return $list;
        } else {
            return false;
        }
    }

    /**
     * 获得一条数据
     *
     * @param string $sql            
     */
    public function getOne($sql)
    {
        $result = $this->query($sql);
        if (mysql_num_rows($result) > 0) {
            return mysql_fetch_assoc($result);
        } else {
            return false;
        }
    }

    /**
     * 关闭数据库链接
     */
    public function close()
    {
        mysql_close($this->conn);
    }
}