<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryModel as Category;

class EventModel extends Model
{
    protected $table = 'events';

    public function photos(){
        return $this->hasMany(Photos::class, 'event_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
