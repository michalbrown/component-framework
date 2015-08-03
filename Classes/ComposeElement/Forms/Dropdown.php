<?php
/**
 * Created by PhpStorm.
 * User: michal.brown
 * Date: 15/07/30
 * Time: 7:51 PM
 */

class Dropdown {
private $options=[];
    public function addToList($option)
    {
        array_push($this->options,$option);
    }
    public function Generate($title)
    {
        $tmp=null;
        foreach ($this->options as $op)
        {
            $tmp.="<option>".$op."</option>";
        }
        return '<div class="form-group"><label class="col-sm-2 control-label">'.$title.'</label>

            <div class="col-sm-10"><select class="form-control m-b" name="account">
            '.$tmp.'
            </select>
            </div>
        </div>';
    }
}