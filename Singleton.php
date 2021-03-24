<?php
/**
 * 单例 懒汉模式（用到的时候再去加载）
 */
class Singleton
{
    private static $instace = null;

    public function __construct(){
        
    }

    public static function getInstance(){
        if(self::$instace != null) {
            self::$instace = new self();
        }
        return self::$instace;
    }
    //防止克隆
    public function __clone(){

    }
}
