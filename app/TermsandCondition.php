<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TermsandCondition extends Model
{
    protected $table = 'tbltermscondition';
    public $primaryKey = 'intTermsConditionID';
    protected $fillable = [
        'strAttachments',
        'strTermsConditionTitle',
        'strTermsConditionDesc',
        'boolDeleted',
    ];
    public function contracts(){
        return $this->hasOne('App\Contract','intCTermsConditionID');
    }
}
