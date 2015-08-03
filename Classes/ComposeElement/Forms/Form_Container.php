<?php
/**
 * Created by PhpStorm.
 * User: michal.brown
 * Date: 15/07/30
 * Time: 7:49 PM
 */

include "Classes/ComposeElement/Forms/TextBox.php";
include "Classes/ComposeElement/Forms/RadioBox.php";
include "Classes/ComposeElement/Forms/DropDown.php";
include "Classes/ComposeElement/Forms/Button.php";

class Form_Container {
    private $formComponents=[];
    public function AddElement($element)
    {
        array_push($this->formComponents,$element);
    }
    public function Generate()
    {
        $components=null;
        foreach($this->formComponents as $comp)
        {
            $components.=$comp;
        }

        return '<form method="get" class="form-horizontal">
                '.$components.'</form>';
    }
}