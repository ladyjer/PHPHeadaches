<?php
/**
 * Created by PhpStorm.
 * User: renato
 * Date: 19/07/16
 * Time: 21.48
 */

class CallbackUrl
{
    const WRAPPER_NAME = 'callback';

    public $context;
    private $_cb;
    private $_eof = false;

    private static $_isRegistered = false;

    public static function getContext($cb)
    {
        if (!self::$_isRegistered) {
            stream_wrapper_register(self::WRAPPER_NAME, get_class());
            self::$_isRegistered = true;
        }
        if (!is_callable($cb)) return false;
        return stream_context_create(array(self::WRAPPER_NAME => array('cb' => $cb)));
    }

    public function stream_open($path, $mode, $options, &$opened_path)
    {
        if (!preg_match('/^r[bt]?$/', $mode) || !$this->context) return false;
        $opt = stream_context_get_options($this->context);
        if (!is_array($opt[self::WRAPPER_NAME]) ||
            !isset($opt[self::WRAPPER_NAME]['cb']) ||
            !is_callable($opt[self::WRAPPER_NAME]['cb'])) return false;
        $this->_cb = $opt[self::WRAPPER_NAME]['cb'];
        return true;
    }

    public function stream_read($count)
    {
        if ($this->_eof || !$count) return '';
        if (($s = call_user_func($this->_cb, $count)) == '') $this->_eof = true;
        return $s;
    }

    public function stream_eof()
    {
        return $this->_eof;
    }
}

class Test {
    private $_s;
    public function __construct($s)
    {
        $this->_s = $s;
    }
    public function read($count) {
        return fread($this->_s, $count);
    }
}

$t = new Test(fopen('/etc/services', 'r'));
$fd = fopen('callback://', 'r', false, CallbackUrl::getContext(array($t, 'read')));
while(($buf = fread($fd, 128)) != '') {
    print $buf;
}