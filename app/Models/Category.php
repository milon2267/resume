<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Project;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_name', 
        'slug'
    ];

    function projects(){
        return $this->hasMany(Project::class, 'category_id');
    }


}
