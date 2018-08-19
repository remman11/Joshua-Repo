<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotations extends Model
{
    protected $table = 'tblquotation';
    protected $primaryKey = 'intQuotationID';
    protected $fillable = [
        'strQuotationDesc',
        'fltFees',
        'fltQuotationRate',
        'enumStatus',
        'boolDeleted',
    ];
    public function agreement(){
        return $this->hasOne('App\Agreements','intAQuotationID');
    }
}
