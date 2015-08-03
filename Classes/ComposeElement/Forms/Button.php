<?php
/**
 * Created by PhpStorm.
 * User: michal.brown
 * Date: 15/07/30
 * Time: 8:03 PM
 */

class Button {
    public function Generate($name,$title=null)
    {
        return '<div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button class="btn btn-primary" name="'.$name.'" type="submit">'.$title.'</button>
                    </div>
                </div>';
    }
}