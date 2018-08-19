<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table ='tblcontractlist';
    public $primaryKey ='intContractListID';
    protected $fillable = [
        'intCAgreementID',
        'intCAttachmentsID',
        'intCTermsConditionsID',
        'intCCompanyID',
        'strContractListTitle',
        'strContractListDesc',
        'boolDeleted',
    ];

    public function company(){
        return $this->belongsTo('App\Company','intCCompanyID');
    }
    public function attachments(){
        return $this->belongsTo('App\Attachments','intCAttachmentsID');   
    }
    public function termscondition(){
        return $this->belongsTo('App\TermsandCondition','intCTermsConditionID');
    }
    public function agreements(){
        return $this->belongsTo('App\Agreements','intCAgreementID');
    }    
}
