<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSched extends Model
{
    protected $table = 'tbljobsched';
    protected $primaryKey = 'intJobSchedID';
    protected $fillable = [
        
        'intJobSchedID',
        'intJobSchedSID',
        'intJobSchedAID',
        'tmETA',
        'tmETD',
    ];
}
