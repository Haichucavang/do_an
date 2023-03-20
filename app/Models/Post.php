<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title','short_desc','desc','image','post_category_id'
    ];
    protected $primaryKey = 'id';
    protected $table = 'posts';

    public function category(){
        return $this->belongsTo('App\Models\CategoryPost','post_category_id');
    }
}
