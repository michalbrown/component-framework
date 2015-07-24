<?php
/**
 * Created by PhpStorm.
 * User: michal.brown
 * Date: 15/07/22
 * Time: 12:34 AM
 */

namespace Elements;


use Lists\Responders;

class ResponderList {
    private function generateTests()
    {
        $tests=new \Tests();
        $html='';
        foreach($tests->getTests() as $item)
        {
            $html.='<div class="infont col-md-2 animated-panel zoomIn" style="animation-delay: 0.2s; -webkit-animation-delay: 0.2s;">
                                    <div class="font-icon-detail">
                                        <div class="row" align="center">
                                            <i class="fa '.$item['icon'].' fa-5x '.($item['testValue'] == 1 ? "text-success" : "").'"></i>
                                        </div>
                                        <div class="row" align="center">
                                            <span class="font-icon-name" >'.$item['testName'].'</span>
                                        </div>
                                    </div>
                                </div>
                                ';
        }
        return $html;
    }
    public function GenerateLists()
    {
        $responders=new Responders();
        $html="";
        $tests=new \Tests();
        foreach ($responders->getResponders() as $respond)
        {
//            $tests->update("abbr","E_string","testValue",$respond['testValues']['E_string']);
//            print_r("<br/>");
//            foreach ($tests->getTests() as $test)
//            {
//                print_r($test['testValue']);
//                print_r("<br/>");
//            }
//            print_r($respond['testValues']['E_string']);
//            print_r("<br/>");

            $html.='
        <div class="content animate-panel" data-child="row" data-effect="fadeInRight">
            <div class="row animated-panel fadeInRight" style="animation-delay: 0.1s; -webkit-animation-delay: 0.1s;">
                <div class="col-lg-12">
                    <div class="hpanel">
                        <div class="panel-heading"><div class="panel-tools"><a class="showhide"><i class="fa fa-chevron-up"></i></a></div>'.$respond['responderName'].'</div>
                        <div class="panel-body">'.$this->generateTests().'</div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-default pull-right" onclick="console.log(\'test\')">View Responder</button>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        ';

        }
        echo $html;

    }

}