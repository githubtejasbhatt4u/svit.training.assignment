<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyAssignment1 extends Model
{
    public function insert_assignment($ad,$t,$b,$i)
   {
    $this->achievement_date=$ad;
    $this->title=$t;
    $this->body=$b;
    $this->image_name=$i;
    $this->save();
   }
           
}
