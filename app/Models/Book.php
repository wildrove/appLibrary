<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'publisher',
        'author',
        'description',
        'status',
        'year',
        'slug'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function rent()
    {
        return $this->belongsTo(Rent::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


}
