<?php
/**
 * Created by PhpStorm.
 * User: michal.brown
 * Date: 15/07/28
 * Time: 9:02 PM
 */

namespace Elements;


class Hpanel {

    public function Generate($title,$content,$contentClass="text-center")
    {
    return '<div class="hpanel">
                    <div class="panel-body">
                        <div class="'.$contentClass.'">
                            <h2 class="m-b-xs">'.$title.'</h2>
                            '.$content.'
                        </div>
                    </div>
                </div>';

    }

}