<?php
/**
 * Created by PhpStorm.
 * User: michal.brown
 * Date: 15/07/21
 * Time: 3:51 PM
 */

namespace Navigation;

//include "CssIncludes.php";
class MainNav
{
    private static $sideBarItems=[];

    public function getSideBarItems()
    {
        return $this::$sideBarItems;
    }
    public function setSidebarItem($link,$title)
    {
         array_push($this::$sideBarItems,array("link"=>$link,"title"=>$title));
    }
}