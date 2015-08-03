<?php
/**
 * Created by PhpStorm.
 * User: michal.brown
 * Date: 15/07/30
 * Time: 7:49 PM
 */

class TextBox {

    public function Generate($name,$title="",$help="")
    {
        return '<div class="form-group"><label class="col-lg-2 control-label">'.$title.'</label>
                    <div class="col-lg-10"><input type="text" class="form-control" name="'.$name.'"> <span class="help-block m-b-none">'.$help.'</span>
                    </div>
                </div>';
    }
}