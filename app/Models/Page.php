<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Page extends Model
{
    use HasFactory,Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'image',
        'video',
        'user_id',
    ];
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
