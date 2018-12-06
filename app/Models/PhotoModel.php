<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\EventModel as Events;

class PhotoModel extends Model
{
    protected $table = 'event_photos';

    public function event(){
        return $this->belongsTo(Events::class, 'event_id');
    }
}
