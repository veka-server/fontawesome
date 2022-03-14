<?php

namespace VekaServer\FontAwesome;

class Autoload
{

    public static function getPathView(){
        return [];
    }

    public static function getPathJS(){
        return [];
    }

    public static function getPathCSS(){
        return [dirname(__DIR__).DIRECTORY_SEPARATOR.'css'];
    }

    public static function getRoute(){
        return dirname(__DIR__).DIRECTORY_SEPARATOR.'font'.DIRECTORY_SEPARATOR.'fonteawsome'.DIRECTORY_SEPARATOR;
    }

}
