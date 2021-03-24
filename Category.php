<?php
/** 
 * 策略模式
 * 定义一组策略，并把其封装到一个对象中。然后在运行时，可以灵活的使用其中的一个策略
 */
// 策略接口定义
interface DiscountCategory{
    public function getDiscount(); //模拟打折场景
}
//策略实现类，普通会员打九折
class UserDiscountCategory implements DiscountCategory{
    public function getDiscount(){
        echo "普通会员打九折哦";
    }
}

//策略实现类，满减
class OverDiscountCategory implements DiscountCatrgory{
    public function getDiscount(){
        echo "满减哦，先生";
    }
}

//策略应用类
class DeplyDiscount{
    private $discount =null; //默认策略

    public function __construct(UserDiscountCategory $discountCategory){
        $this->discount = $discountCategory;
    }

    public function setCategory(DiscountCategory $category){
        $this->discount = $category;
    }

    public function getDiscount(){
        $this->discount->getDiscount();
    }
}