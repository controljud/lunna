<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\EventModel as Events;

class CategoryModel extends Model
{
    protected $table = 'category';

    public function events(){
        return $this->hasMany(Events::class, 'category_id');
    }
}
