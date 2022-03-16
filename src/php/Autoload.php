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

    
    public static function getFontByName($filename){

        $file_path = realpath(dirname(__DIR__).DIRECTORY_SEPARATOR.'font'.DIRECTORY_SEPARATOR.'fonteawsome').DIRECTORY_SEPARATOR.basename($filename);

        if(!is_file($file_path))
            return '';

        $mod_date=filemtime($file_path);

        header("Last-Modified: ".gmdate('D, d M Y H:i:s', $mod_date));
        header("Cache-Control: max-age=3600");
        header('Pragma: cache');

        $path_parts = pathinfo($file_path);

        switch($path_parts["extension"]){

            /** seulement les extensions suivante */
            case 'eot':
                $ct = 'font/eot';
                break;
            case 'svg':
                $ct = 'font/svg';
                break;
            case 'ttf':
                $ct = 'font/ttf';
                break;
            case 'woff':
                $ct = 'font/woff';
                break;
            case 'woff2':
                $ct = 'font/woff2';
                break;

            default:
                return '';
        }

        // ne pas executer mais lire le fichier
        header('Content-type: '.$ct);
        readfile($file_path);
    }

}
