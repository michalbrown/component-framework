<?php
/**
 * Created by PhpStorm.
 * User: michal.brown
 * Date: 15/07/22
 * Time: 12:09 AM
 */

namespace Lists;


class Responders {
    private static $responders=[];
    public function SetResponder($responderName,$responderUrl,$responderToken,$appId,$appSecret,$arrayTestValues)
    {
        $item=array("responderName"=>$responderName,"responderUrl"=>$responderUrl,"responderToken"=>$responderToken,"appId"=>$appId,"appSecret"=>$appSecret,"testValues"=>$arrayTestValues);
        if (!in_array($item,$this::$responders))
        {
            array_push($this::$responders,$item);
        }
    }
    public function getResponders()
    {
        return $this::$responders;
    }
}