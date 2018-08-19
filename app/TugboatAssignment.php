<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TugboatAssignment extends Model
{
    protected $table = 'tbltugboatassign';
    protected $primaryKey = 'intTAssignID';
    protected $fillable = [
        
        'intTAssignID',
        'intTATugboatID',
        'intTATeamID',
        'intTADesc',
        'boolDeleted',
    ];
}
