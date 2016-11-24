<?php

abstract class Session
{
    public static function start()
    {
        session_start();
    }
    
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    
    public static function get($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }
    
    public static function remove($key)
    {
        unset($_SESSION[$key]);
    }
    
    public static function setFlash($message)
    {
        self::set('flash_message', $message);
    }
    
    public static function getFlash()
    {
        $message =self::get('flash_message');
        self::remove('flash_message');
        return $message;
    }
}