<?php
/**
 * Created by PhpStorm.
 * User: michal.brown
 * Date: 15/07/22
 * Time: 12:27 AM
 */

class Tests {
    private static $tests=[];
    public function setTest($testname,$icon,$javascriptFunction,$value,$abbr)
    {

        //idea? add db field in here? maybe
        $item=array("testName"=>$testname,"icon"=>$icon,"javaScriptFunction"=>$javascriptFunction,"testValue"=>"$value","abbr"=>$abbr);
        if (!in_array($item,$this::$tests))
        {
            array_push($this::$tests,$item);
        }
    }
    public function getTests()
    {
        return $this::$tests;
    }
    public function update($identifierKey,$identifierValue,$key,$value)
    {

        $demo=$this::$tests;
        foreach($demo as $key=>$value)
        {
            if ($identifierKey)
            {
                $this::$tests[$key]=$value;
            }
        }
    }

}