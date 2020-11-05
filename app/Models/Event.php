<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UserController;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
   // use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'title',
        'genre',
        'description',
        'page',
        'status',
        'created_by',
        'noa',
        'event_date',
    ];
   
    public function creator(){
       // return $this->belongTo(User::class, 'created_by', 'id');
       return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
