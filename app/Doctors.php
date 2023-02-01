<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Doctors extends Model
{
    protected $table = "doctors";
    protected $fillable = ['registration_code', 'name', 'polyclinic_id'];

    public static function registration_code()
    {
    	$kode = DB::table('doctors')->max('registration_code');
    	$addNol = '';
    	$kode = str_replace("D", "", $kode);
    	$kode = (int) $kode + 1;
        $incrementKode = $kode;

    	if (strlen($kode) == 1) {
    		$addNol = "000";
    	} elseif (strlen($kode) == 2) {
    		$addNol = "00";
    	} elseif (strlen($kode == 3)) {
    		$addNol = "0";
    	}

    	$kodeBaru = "D".$addNol.$incrementKode;
    	return $kodeBaru;
    }

    public function polyclinics() {
        return $this->belongsTo('App\Polyclinics', 'polyclinic_id', 'id');
    }

    public function patients() {
        return $this->hasMany('App\Patients', 'doctor_id', 'id');
    }
}
