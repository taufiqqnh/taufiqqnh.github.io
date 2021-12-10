<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section1 extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title','desc',
    'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sluggable():array
    {
        return[
            'id' => [
                'source' => 'id'
            ]
            ];
    }
}
