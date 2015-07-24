<?php
/**
 * Created by PhpStorm.
 * User: michal.brown
 * Date: 15/07/21
 * Time: 4:31 PM
 */
namespace Elements{
    use Navigation\MainNav;

    class SideBar
   {
        public function Create($name,$imagePath="images/Applogo_48.png")
        {
            $items=new MainNav();
            $html='<aside id="menu"><div id="navigation"><div class="profile-picture"><a href="#"><img src="'.$imagePath.'" class="img-circle m-b" alt="logo">
            </a><div class="stats-label text-color"><span class="font-extra-bold font-uppercase">'.$name.'</span></div></div><ul class="nav" id="side-menu">';
            foreach($items->getSideBarItems() as $sideBarItem)
            {
                $html.='<li>
                <a href='.$sideBarItem['link'].'> <span class="nav-label">'.$sideBarItem['title'].'</span> </a>
            </li>';
            }
            echo $html.'</ul></div></aside>';
        }
   }
}