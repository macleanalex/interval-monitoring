<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Behavior extends Model
{
    protected $fillable = ['student_id', 'name', 'description'];

    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
