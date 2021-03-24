<?php
/**
 * 观察者模式
 * 1. 观察者向主题注册，主题通知观察者作出对应
 * 2. 主题提供注册，通知接口
 */
//观察者需要实现的接口
interface Observe{
    //观察者行为
    public function watch();
}

 /**
  * 主题接口
  */
 interface ThemeSubject{
     //注册
    public function register(Observe $observe);
    //通知
    public function notify();
 }

 //文件观察者
 class File implements Observe{
     public function watch(){
         echo "this is File observe action";
     }
 }
//目录观察者
 class Dir implements Observe{
     public function watch(){
         echo "this is my Dir observe action";
     }
 }

 class Theme implements ThemeSubject{
    private $observes = []; //存放观察者

    public function register(Observe $observe){
        $this->observes[] = $observe;
    }

    public function notify(){
        foreach($this->observes as $v){
            $v->watch();
        }
    }

 }