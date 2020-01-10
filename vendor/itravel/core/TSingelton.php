<?php


namespace travel;

//Данный паттерн позваляет создавать глобальный объект то есть в любом месть сможешь создать объект неоюходимого класса
trait TSingelton {

    private static $instance;
    
    public static function instance() {
        if(self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}