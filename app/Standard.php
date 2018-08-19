<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standard extends Model
{
    protected $table = 'tblstandard';
    protected $primaryKey = 'intStandardID';
    protected $fillable = [
        'strStandardDesc',
        'fltSDeliveryRate',
        'boolDeleted',
    ];
    public function agreement()
    {
        return $this->hasOne('App\Agreements','intAStandardID');
    }
}
