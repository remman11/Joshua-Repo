<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berth extends Model
{
    protected $table = 'tblberth';
    public $primaryKey = 'intBerthID';  
    public $timestamps = false;
    protected $fillable = [
        'intBerthID',
        'strBerthName',
        'boolDeleted'
    ];
}
