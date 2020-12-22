<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    //Only when NOT use require()->all()
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'title';
    }
}
