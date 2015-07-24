<?php
/**
 * Created by PhpStorm.
 * User: michal.brown
 * Date: 15/07/21
 * Time: 4:33 PM
 */

namespace Scripts;
define(BASEPATH,"");
class JsIncludes {
    private static $includes=[];

    public function setInclude($file)
    {
        if (!in_array($file,$this::$includes))
        {
            array_push($this::$includes,$file);
        }
    }
    public function generateIncludes()
    {
        foreach ($this::$includes as $script)
        {
            echo "<script src=\"$script\"></script>\r\n";
        }
    }
}