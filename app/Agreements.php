<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agreements extends Model
{
    protected $table = 'tblagreement';
    protected $primaryKey = 'intAgreementID';
    protected $fillable = [
        'intAStandardID',
        'intAQuotationID',
        'strAgreementTitle',
        'strAgreementDesc',
        'boolDeleted',
    ];

    public function contract(){
        return $this->hasOne('App\Contract','intCAgreementID');
    }
    public function quotation(){
        return $this->belongsTo('App\Quotations','intAQuotationID');
    }
    public function standard(){
        return $this->belongsTo('App\Standard','intAStandardID');
    }
}
