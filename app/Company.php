<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table ='tblcompany';
    public $primaryKey ='intCompanyID';

    public function contract()
    {
        return $this->hasMany('App\Contract','intCCompanyID');
    }
}
