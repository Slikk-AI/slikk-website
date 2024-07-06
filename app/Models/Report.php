<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    
    function getTimezoneData($isocode){
        $Res= DB::table('mr_timezone');
		if($isocode!='')
			$Res->where('country_code',$isocode);
                $Res = $Res->get();
        return $Res;
    }

}