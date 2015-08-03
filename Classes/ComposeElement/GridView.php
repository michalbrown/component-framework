<?php
/**
 * Created by PhpStorm.
 * User: michal.brown
 * Date: 15/07/28
 * Time: 7:03 PM
 */

namespace Elements;


class GridView {

    public $jsonDataSource;

    public $columns=[];
    public $rows=[];
    public function GenerateGridView($htmlClass)
    {
        $table="<table class='".$htmlClass."'>";
        $cols="";
        $rows="";
        $colcount=false;
        if ($this->jsonDataSource!=null)
        {
            $ds=json_decode($this->jsonDataSource);
            foreach ($ds as $value)
            {
                $test=$value;
                foreach($test as $test3=>$test2)
                {
                    $rows.="<tr>";
                    foreach ($value as $key=>$val)
                    {
                        if (!$colcount)
                        {
                            $cols.="<th>".$key."</th>";
                        }
                        array_push($this->rows,$val);
                        $rows.="<td>".$val."</td>";
                    }
                    $colcount=true;
                    $rows.="</tr>";
                }
            }
        }
        return $table.'<thead>'.$cols.'</thead><tbody>'.$rows."</tbody></table>";
    }

}