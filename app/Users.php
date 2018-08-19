<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'tbluser';
    protected $primaryKey = 'intUserID';
    protected $fillable = [
        'intUUserTypeID',
        'intUCompanyID',
        'strUserName',
        'strUserPassword',
        'boolDeleted',
    ];

    public function usertype(){
        return $this->belongsTo('App\UserType','intUUserTypeID');
    }
}
