<?php
/**
 * Created by PhpStorm.
 * User: michal.brown
 * Date: 15/07/21
 * Time: 4:33 PM
 */

namespace Scripts;
define('BASEPATH',"");
class CssIncludes {
    private static $includes=[];

    public function setInclude($file,$useBasePath=false)
    {
        if (!in_array($file,$this::$includes))
        {
            if (!$useBasePath) {
                array_push($this::$includes, $file);
            }
            else{
                array_push($this::$includes, BASEPATH.$file);
            }
        }
    }
    public function generateIncludes()
    {
        foreach ($this::$includes as $script)
        {
         echo '<link rel="stylesheet" href="'.$script.'""/>';
        }
    }
}