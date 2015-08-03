<?php
/**
 * Created by PhpStorm.
 * User: michal.brown
 * Date: 15/07/21
 * Time: 9:49 PM
 */

//php includes
include "Classes/Resources/MainNav.php";
include "Classes/ComposeElement/SideBar.php";
include "Classes/ComposeElement/hpanel.php";
include "Classes/ComposeElement/ResponderList.php";
include "Classes/ComposeElement/GridView.php";

include "Classes/ComposeElement/Forms/Form_Container.php";
include "Classes/Resources/CssIncludes.php";
include "Classes/Resources/JsIncludes.php";
include "Classes/Resources/Tests.php";
include "Classes/Resources/Responders.php";


//Setup Global Css Files
$css=new \Scripts\CssIncludes();
$css->setInclude("vendor/fontawesome/css/font-awesome.css");
$css->setInclude("vendor/animate.css/animate.css");
$css->setInclude("vendor/bootstrap/dist/css/bootstrap.css");
$css->setInclude("styles/style.css");

$navigation=new \Navigation\MainNav();
$navigation->setSidebarItem("Dash.php","Dashboard");
$navigation->setSidebarItem("Inventory.php","Inventory Manager");
$navigation->setSidebarItem("Workshop.php","Work Shop");

$js=new \Scripts\JsIncludes();

$js->setInclude("vendor/jquery/dist/jquery.min.js");
$js->setInclude("vendor/jquery-ui/jquery-ui.min.js");
$js->setInclude("vendor/bootstrap/dist/js/bootstrap.min.js");
$js->setInclude("vendor/metisMenu/dist/metisMenu.min.js");
$js->setInclude("vendor/iCheck/icheck.min.js");
$js->setInclude("vendor/sparkline/index.js");
$js->setInclude("scripts/homer.js");

$arrTest=array("E_string"=>"1","Sig"=>"0","T_CBM"=>"0","RMC_CBM"=>"0","T_Push"=>"","RMC_Push"=>"0");
$arrTest2=array("E_string"=>"0","Sig"=>"0","T_CBM"=>"0","RMC_CBM"=>"0","T_Push"=>"","RMC_Push"=>"0");
$arrTest3=array("E_string"=>"0","Sig"=>"0","T_CBM"=>"0","RMC_CBM"=>"0","T_Push"=>"","RMC_Push"=>"0");

$responders=new \Lists\Responders();
$responders->SetResponder("name","","","","",$arrTest);
$responders->SetResponder("name2","","","","",$arrTest2);
$responders->SetResponder("name3","","","","",$arrTest3);

$tests=new Tests();
$tests->setTest("Echo String","fa-exchange","",0,"E_string");
$tests->setTest("Signature","fa-lock","",0,"Sig");
$tests->setTest("Text Callback Message","fa-file-text-o","",1,"T_CBM");
$tests->setTest("Rich Media CallBack Message","fa-file-image-o","",0,"RMC_CBM");
$tests->setTest("Text Push Message","fa-comment","",0,"T_Push");
$tests->setTest("Rich Media Push Message","fa-comment-o","",0,"RMC_Push");
$tests->setTest("Payments","fa-comment-o","",0,"RMC_Push");
$tests->setTest("Payments1","fa-comment-o","",0,"RMC_Push");
$tests->setTest("Payments2","fa-comment-o","",0,"RMC_Push");

$testGrid=new \Elements\GridView();
$testGrid->jsonDataSource=json_encode
(
    array
    (
        array("test"=>"test2","name"=>"nametest2"),
        array("test"=>"test2","name"=>"nametest2"),
        array("test"=>"test2","name"=>"namwtest2"),
        array("test"=>"test2","name"=>"test2"),
        array("test"=>"test2","name"=>"test2"),
        array("test"=>"test2","name"=>"test2")
    )
);

$hpanel=new \Elements\Hpanel();
