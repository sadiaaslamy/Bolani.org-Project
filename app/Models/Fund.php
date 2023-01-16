<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    use HasFactory;
    protected $table = 'funds';
    protected $fillable =[
        'title',
        'goal',
        'description',
        'file_path'
    ];
    
    //connect tables
    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

    // public function updates(){
    //     return $this->belongsTo(Update::class);
    // }
}
