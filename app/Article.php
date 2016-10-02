<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

        protected $fillable =[
        'title', 'text','name','email','number','published_at','picture'
    ];

    public function getDates()
    {
        // Return any columns that are date or datetime types
        // to automatically have Laravel convert them to Carbon
        // objects. (Also include created_at, updated_at and
        // deleted_at if you use them)
        return [ 'published_at'];
    }

    public function setPublishedAtAttribute()
    {
        $this->attributes['published_at'] = Carbon::now()->setTimeZone('Europe/Skopje');
    }


}
