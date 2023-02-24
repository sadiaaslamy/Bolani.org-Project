<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;
    protected $table = 'updates';
    protected $fillable =[
        'description',
        'image',
        'update_id'
    ];

    //connect two tables fund with update
    public function fund(){
        return $this->belongsTo(Fund::class);
    }
}