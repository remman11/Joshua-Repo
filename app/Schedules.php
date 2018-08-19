<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    protected $table = 'tblschedule';
    protected $primaryKey = 'intScheduleID';
    protected $fillable = [
        'intScheduleID',
        'intSBerthID',
        'intSBargeID',
        'intSVesselID',
        'intSCompanyID',
        'intSAttachmentsID',
        'strSchedDesc',
        'tmETA',
        'tmETD',
        'enumStatus',
        'boolDeleted',
    ];
}
