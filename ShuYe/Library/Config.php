<?php
/**
* @filename Config.php
* @touch 2015-8-15下午11:17:53
* @package php
* @author SuperShuYe
* @license http://www.supershuye.com
* @version 1.0.0
* @copyright (c) 2015-8-15, SuperShuYe
*/
namespace ShuYe\Library;

class Config implements \ArrayAccess
{

    protected $path;

    protected $configs = array();

    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * (non-PHPdoc)
     *
     * @see ArrayAccess::offsetExists()
     */
    public function offsetExists($offset)
    {
        return isset($this->configs[$offset]);
    }

    /**
     * (non-PHPdoc)
     *
     * @see ArrayAccess::offsetGet()
     */
    public function offsetGet($offset)
    {
        if (empty($this->configs[$offset])) {
            $file_path = $this->path . '/' . $offset . '.php';
            $config = require $file_path;
            $this->configs[$offset] = $config;
        }
        
        return $this->configs[$offset];
    }

    /**
     * (non-PHPdoc)
     *
     * @see ArrayAccess::offsetSet()
     */
    public function offsetSet($offset, $value)
    {
        throw new \Exception("不能写入配置文件");
    }

    /**
     * (non-PHPdoc)
     *
     * @see ArrayAccess::offsetUnset()
     */
    public function offsetUnset($offset)
    {
        unset($this->configs[$offset]);
    }
}