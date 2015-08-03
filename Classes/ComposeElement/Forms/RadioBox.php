<?php
/**
 * Created by PhpStorm.
 * User: michal.brown
 * Date: 15/07/30
 * Time: 7:50 PM
 */

class RadioBox {
    public function Generate($name,$label)
    {
        return '<div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio1" value="option1" name="'.$name.'" checked="">
                                    <label for="inlineRadio1"> '.$label.' </label>
                                </div>';
    }
}