<?php
/**
 * 简单工厂模式
 */

 interface CreateCar{
     public function car();
 }

 class BmCar implements CreateCar{
     public function car(){
         echo "this is BmCar boy";
     }
 }

 class WlCar implements CreateCar{
     public function car(){
         echo "this is WlCar girl";
     }
 }

 class Car{
     public function createCar($car){
         $carObj = null;
         switch($cat){
            case "bm":
                $carObj = new BmCar();
                break;
            case "wl":
                $carObj = new WlCar();
                break;
            default:
                die("没有这类".$car."汽车制造车间哦");
            break;
         }
         $carObj->car();
     }
 }